<?php
  // session_start();

  // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      // header("location: login.php");
      // exit;
  // }
// ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>KHANA KHAJANA.com</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"><strong>KHANA KHAJANA.com</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
        
      </li>
      <li class="nav-item">
        <a class="nav-link " href="services.php"  >Services</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <a href ="index.php"class="btn btn-danger my-2 my-sm-0" >Log Out</a>
    </form>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpg" class="d-block w-100 abouting img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-primary">Welcome to KHANA KHAJANA.com</h1>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100 abouting img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>We here for provide a quality food</h2>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100 abouting img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="text-dark">Your Satisfication Our responsibility</h3>
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="my-2 container-fluid">
  <div class="py-2">
    <h3 class="text-center bg-primary">About Us</h3>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="img1.jpg" class="img-fluid abouting" alt="">

    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="text-center">Hello! We are <h2 class="text-danger text-center">KHANA KHAJANA.com</h2></h2>
      <p>Launched in Dehradun 1 year ago, KHANA KHAJAN.com has grown from a home project to one of the largest food aggregators in the India. We are present in 24 1000+ cities in India, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with restaurants to enable a sustainable ecosystem.</p>
      <a href="about.php" class=" btn btn-success">Check More</a>

    </div>

  </div>
</div>
</section>
<section class="my-2 container-fluid">
  <div class="py-2">
    <h3 class="text-center bg-danger">Our Services</h3>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img4.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img5.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img6.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img7.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img8.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img9.webp" class="img-fluid" alt="">
    </div>
    <a href="services.php" class=" btn btn-success mt-2 ml-3">Check More</a>
  </div>
</div>
</section>
<section class="my-2 container-fluid">
  <div class="py-2">
    <h3 class="text-center bg-dark text-white">Our Partners</h3>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img10.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img11.png//" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12 my-2">
      <img src="img12.jpg" class="img-fluid" alt="">
    </div>
</section>
<section class="my-2 container-fluid">
<div class="py-2">
    <h3 class="text-center bg-warning text-dark">Please Confirm Your Order</h3>
  </div>
<form action="onlinefood.php" method="post" class="mx-5">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" name="email">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="phone" class="form-control" id="formGroupExampleInput" name="phone">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="address">
  </div>
  <div class="form-group">
    <label for="choice">What do You want to eat?</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="choice">
  </div>
  <button class="btn btn-success" type="submit">Confirm Order</button>
</form>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
