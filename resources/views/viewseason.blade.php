<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View season</title>
</head>
<body>
    <div>
        <td><a class="btn btn-primary" href="/addseason/{{ $name }}" role="button">Add Season</a></td>
    </div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">View Episode</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($season as $seasonss)
        <tr>
            <td>{{ $seasonss->id }}</td>
            <td>Season {{ $seasonss->name }}</td>
            <td><a class="btn btn-primary" href="/viewepisode/{{$seriesname}}/season-{{ $seasonss->name }}" role="button">View episodes</a></td>
            <td><a class="btn btn-primary" href="/addepisode/{{$seriesname}}/{{ $seasonss->name }}" role="button">Add episode</a></td>
            <td><a class="btn btn-primary" href="/season/delete/{{ $seasonss->id }}" role="button">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
