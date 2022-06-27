<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mx-5">
<div class="mt-5">
    <a href="{{route('usertype.create')}}" class="btn btn-primary shadow">Add User</a>
</div>
<h1>Shpw All Users</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>
                <a href="{{url('/usertype/edit/usertype',$type->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{url('/usertype/delete/usertype',$type->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{url('/usertype/show/usertype',$type->id)}}" class="btn btn-success">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>
