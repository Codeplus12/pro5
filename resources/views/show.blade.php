<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="i">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="i">insert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="s">show</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<center>
<h1>Data</h1>
</center>

<br><br>
<table class="table table-dark table-hover table-bordered">
  <tr>
    <th>Id</th>
  <th>Name</th>
  <th>File</th>
  <th>Delete</th>
  <th>Edit</th>
</tr>

@foreach ($data as  $row)

<tr>
    <td>{{$row->id}}</td>
  <td>{{$row->name}}</td>
  <td><img src="img/{{$row->file}}" alt=""></td>
  <td><a href="delete/{{$row->id}}" class="btn btn-outline-danger">Delete</a></td>
  <td><a href="edit/{{$row->id}}" class="btn btn-outline-warning">Edit</a></td>

</tr>


@endforeach


</table>
</body>
</html>