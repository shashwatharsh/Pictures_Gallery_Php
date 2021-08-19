<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a title="Photo Gallery" class="navbar-brand" href="#carouselExampleIndicators" >Harsh's PGallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#carouselExampleIndicators">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="#naturep" class="dropdown-item">Nature</a></li>
                <br>
                <li><a class="dropdown-item" href="#wall">Abstract</a></li>
                <br>
                <li><a class="dropdown-item" href="#tech">Colors</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/nature/p1.jpg" class="d-block w-100 imgc" alt="nature/flower">
    </div>
    <div class="carousel-item">
      <img src="img/nature/p2.jpg" class="d-block w-100 imgc" alt="nature/clouds(mountains)">
    </div>
    <div class="carousel-item">
      <img src="img/nature/p3.jpg" class="d-block w-100 imgc" alt="nature/clouds(mountains)">
    </div>
    <div class="carousel-item">
      <img src="img/nature/p4.jpg" class="d-block w-100 imgc" alt="nature/clouds(mountains)">
    </div>
    <div class="carousel-item">
      <img src="img/nature/p5.jpg" class="d-block w-100 imgc" alt="nature">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-4">
    <div id="naturep" class="py-4">
    <h2 class="class-center" style="padding-left: 46px;">Nature</h2>
    </div>
    <div class="cointainer-fluid">
    <div class="row" style="width:1360px;">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/nature/p2.jpg" class="imgn" alt="nature" style="padding-left: 46px;">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/nature/p3.jpg" class="imgn" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/nature/p4.jpg" class="imgn" alt="nature">
        </div>
    </div>
    </div>
</section>
<section class="my-4">
    <div id="wall" class="py-4">
    <h2 class="class-center" style="padding-left: 46px;">Wallpapers</h2>
    </div>
    <div class="cointainer-fluid">
    <div class="row" style="width:1360px;">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/wallpaper/p3.jpg" class="imgn" alt="nature" style="padding-left: 46px;">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/wallpaper/p2.jpg" class="imgn" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/wallpaper/p4.jpg" class="imgn" alt="nature">
        </div>
    </div>
    </div>
</section>
<section class="my-4">
    <div id="tech" class="py-4">
    <h2 class="class-center" style="padding-left: 46px;">Technology</h2>
    </div>
    <div class="cointainer-fluid">
    <div class="row" style="width:1360px;">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/technology/p1.jpg" class="imgn" alt="nature" style="padding-left: 46px;">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/technology/p2.jpg" class="imgn" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="img/technology/p4.jpg" class="imgn" alt="nature">
        </div>
    </div>
    </div>
</section>
<section class="my-4">
    <div id="contact"class="py-4">
    <h2 class="class-center" style="padding-left: 46px;">Contact us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label >Number</label>
                <input type="text" name="number" class="form-control">
            </div>
            <div class="btn btn-success">
                
                <input type="submit" class="btn-success" value="Submit">
            </div>
        </form>
    </div>
</section>
<section class="my-4  bg-b">
    <div id="about"class="py-4">
    <h2 class="text-center" style="padding-left: 46px;">About us</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Harsh</h3>
        <p class="text-center"><b>I am Ghost and interested in develping website and i am developing this.</b></p>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>