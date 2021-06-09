<?php 
  $url = 'http://localhost/new_blog/admin/';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/style.css">
    <title>Blog Site</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="<?php echo $url;?>index.php">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Category</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Post</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
  </div>
</nav>
<div class="main-content">
    <div class="container">
    <div class="row clearfix">
  <div class="col-md-3">
  
 <ul class="list-group">
    <li class="list-group-item active">Left Menu</li>
    <li class="list-group-item">
       <a href="<?php echo $url;?>categories/index.php">Category</a> 
    </li>

    <li class="list-group-item">
       <a href="<?php echo $url;?>posts/index.php">Post</a> 
    </li>

    
   
</ul>
   
  </div>
<div class="col-md-9">