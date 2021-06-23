<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
   <link rel="stylesheet" href="STYLE\STYLE.CSS">
 
               <!-- navbar creation -->
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SorifShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ml-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="HOME.PHP">HOME</a>
        </li>
       

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="SERVICES.PHP">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ABOUT.PHP">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="CONTACT.PHP">CONTACT</a>
        </li>
       


      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
               <!-- NAVBAR END -->
               <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img\img1.jpg" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img\img2.jpg" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img\img1.jpg" alt="New York" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<section class="my-5">
<div class="py-5">
  <h3 class="text-center">about us</h3>
</div>
<div class="container-fluid">
<div class="row">
  <div class= "col-lg-6 col-md-6 col-12">
    <img src="img\img2.jpg" class="img-fluid aboutimg">
  </div>
  <div class= "col-lg-6 col-md-6 col-12">
   <h2 class="display-4">Welcome to SorifShop</h2>
   <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni perferendis officiis blanditiis ducimus perspiciatis explicabo assumenda qui iste, alias suscipit doloremque? Similique ex natus saepe, distinctio incidunt placeat porro omnis!</p>
    <a href="about.php" class="btn btn-success">check more</a>
  </div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-5">
  <h3 class="text-center">OUR SERVICES</h3> </div>
  <div class="container-fluid">
  <div class="row">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">

       
<div class="container">
  <h2>more offers</h2>
  <p>get it from 99</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img\img2.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">check_out</a>
    </div>
  </div>
  <br>
  
  <p>get it from 99</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">check_out</a>
    </div>
    <img class="card-img-bottom" src="img\img1.jpg" alt="Card image" style="width:100%">
  </div>
</div>
  </div>
  </div>
  </div>
  </section>
</div>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
</body>
</html>