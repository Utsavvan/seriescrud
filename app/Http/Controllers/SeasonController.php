<?php

namespace App\Http\Controllers;

use App\Models\episode;
use App\Models\season;
use App\Models\series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeasonController extends Controller
{
    public function add($name)
    {
        return view('seasons');
    }
    public function store(Request $request,$name)
    {
        $season = new season;
        $season->name = $request->input('name');
        $seriesid = DB::select("SELECT id FROM `series` WHERE name = ?",[$name]);
        $sid = $seriesid[0]->id;
        $season->series_id = $sid;
        $season->save();
        return redirect()->route('view.seasons',$name);
    }

    public function view($name)
    {
        $sida = DB::select('SELECT id FROM `series` where name = ?',[$name]);
        $id = $sida[0]->id;
        $season = DB::select('select * from seasons where series_id = ?',[$id]);

        $seriesnamea = DB::select('SELECT series.name FROM `series` INNER JOIN seasons ON series.id=seasons.series_id and series.id = ? LIMIT ?',[$id,1]);
//        dd($seriesname);
        $seriesname = $seriesnamea[0]->name;
//        dd($seriesname);
        return view('viewseason',compact('season','seriesname','name'));
    }

    public function delete($seid) {
        DB::delete('delete from seasons where id = ?',[$seid]);
//        return redirect()->route('view.seasons',$name);
        return redirect()->back();
    }

    //view series
    public function see($name)
    {

        $season = Season::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();

        $episode = episode::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();


        return view('seriesname',compact('season','name','episode'));
    }
}
