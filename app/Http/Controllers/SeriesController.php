<?php

namespace App\Http\Controllers;

use App\Models\series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function add()
    {
        return view('series');
    }
    public function store(Request $request)
    {
        $series = new series();
        $series->name = $request->input('name');
        $series->save();
        return redirect()->route('view.series');
    }

    public function view(){
        $series = DB::select('select * from series');
        return view('viewseries',compact('series'));
    }

    public function delete($sid) {
        DB::delete('delete from series where id = ?',[$sid]);
//        return view('viewseries');
        return redirect()->back();
    }

    public function update($id)
    {
        $series = series::find($id);
        $seriesname = $series->name;
        // dd($seriesname);
        return view('series',compact('seriesname'));
    }
    public function updates(Request $request,$id)
    {
        $series = series::find($id);
        //$flight = Flight::find(1);
        $series->name = $request->input('name');
        $series->save();
        return redirect()->route('view.series');
    }

}
