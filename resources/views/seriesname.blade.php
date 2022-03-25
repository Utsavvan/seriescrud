<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>jQuery AutoFilter: Filter By Tags Example</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <style>
        html, * {
            font-family: 'Inter';
            box-sizing: border-box;
        }

        body {
            background-color: #fafafa;
            line-height: 1.6;
        }

        .lead {
            font-size: 1.5rem;
            font-weight: 300;
        }

        .container {
            margin: 150px auto;
            max-width: 960px;
        }

        .btn {
            padding: 1.25rem;
            border: 0;
            border-radius: 3px;
            background-color: #4F46E5;
            color: #fff;
            cursor: pointer;
        }

        [data-filter] {
            display: inline-block;
            background: #04AA6D;
            color: white;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            margin-bottom: 1rem;
        }

        [data-filter] + [data-filter] {
            margin-left: 5px;
        }

        [data-tags] {
            width: 250px;
            text-align: center;
            line-height: 100px;
            display: inline-block;
            background: #4B5563;
            color: #fff;
            margin: 1rem 1rem 1rem 0;
            border-radius: 5px;
        }
    </style>
</head>

</div>
<div class="container">
    <h2>{{$name}}</h2>
    <div>

        {{--        <span data-filter="js">JavaScript</span>--}}
        {{--                <span data-filter="1">CSS</span>--}}
        {{--                <span data-filter="2">HTML</span>--}}
        @foreach($season as $seasons)
            <span data-filter={{$seasons->id}}>Season {{$seasons->name}}</span>
        @endforeach
    </div>

    <div>
        {{--          <div data-tags="1">Bootstrap</div>--}}
        {{--          <div data-tags="2">Angular</div>--}}
        {{--          <div data-tags="2">TailwindCSS</div>--}}
        {{--          <div data-tags="1">jQuery</div>--}}
        {{--          <div data-tags="2">React.js</div>--}}
        {{--          <div data-tags="1">Vue.js</div>--}}
        @foreach($episode as $episodes)
            <div data-tags="{{$episodes->season_id}}">{{$episodes->name}}</div>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ asset('autofilter.js') }}"></script>
<script>
    $(function ($) {
        $.autofilter();
    });
</script>

</body>
</html>
