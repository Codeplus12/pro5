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

<style>
    .h45{height:45px}
    .h20{height:20px}
</style>
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

<div class="container">
<center>
    <h1>Insert Data</h1>
    <form action="go"  method="post" enctype="multipart/form-data">
      @csrf
    
    <input type="hidden" placeholder=" id" class="h45 form-control" name="id">
    <div class="h20 col-md-12"></div>
    <input type="name" placeholder="Enter name" class="h45 form-control" name="name">
    <div class="h20 col-md-12"></div>
    <input type="file" placeholder=" file" class="h45 form-control" name="file">
    <div class="h20 col-md-12"></div>
    
    <a href=""><button type="submit" class="btn btn-success col-md-12 h45" name="send">submit</button></a>
</form>
</center>
</div>    
    
</body>
</html>