<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="icon" href="images/logo.png" type="image/png">
  <title> The Loucius Resto </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-white shadow sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <a href="<?=base_url('reservasi'); ?>" class="btn btn-brand"> Reservasi </a>
      </div>
    </div>
  </nav>

  <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item text-center bg-cover vh-100 active slide-1">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center ">
            <div class="col-lg-8">
              <h5 class="text-white"> welcome to loucious </h5>
              <h3 class="display-1 fw-bold text-white"> Garlic Butter Steak </h3>
              <a href="" class="btn btn-brand"> Menu </a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item text-center bg-cover vh-100 slide-2">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h5 class=" text-white"> welcome to loucious</h5>
              <h3 class="display-1 fw-bold text-white"> Fettuccine Alfredo </h3>
              <a href="" class="btn btn-brand"> Menu </a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item text-center bg-cover vh-100 slide-3">
        <div class="container h-100 d-flex align-items-center justify-content-center">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h5 class="text-white"> welcome to loucious</h5>
              <h3 class="display-1 fw-bold text-white"> Oysters Rockefellerk </h3>
              <a href="" class="btn btn-brand"> Menu </a>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

        <h1 class="text-center mt-5">
            Galeri
        </h1>

        <div class="col-lg-5 ">
            <h1> Promo </h1>
            <div class="divider my-2">
              <p> Jelajahi variasi terbaik dari dapur kami melalui Menu Degustation Spesial Malam Ini.</p>
              <p> Setiap hidangan dirancang untuk mengajak Anda dalam perjalanan kuliner yang tak terlupakan.</p>
              <a href="" class="btn btn-brand"> Lihat Promo </a>
            </div>
          </div>	




    <footer class="text-black text-center py-3">
        <div class="container text-center">
        <span class="text-muted"> &copy; 2024 Welcome My Restaurant. All rights reserved. </span>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </div>
</body>
</html>

<style>
  body {
    font-family: sans-serif;
    color: #777;
    line-height: 1.7;
  }

  h1,
  h2,
  h3,
  h4,
  h5 {
    font-weight: 600;
    color: #222;
  }

  a {
    color: #222;
    text-decoration: none;
    transition: all 0.4s;
    font-weight: 600;
  }

  a:hover {
    color: #f58d17;
  }

  img {
    width: 100%;
  }

  section {
    padding-top: 120px;
    padding-bottom: 120px;
  }

  .btn {
    border: 0;
    padding: 14px 38px;
  }

  .btn-brand {
    background-color: black;
    font-weight: 500;
    color: #fff;
    border-color: yellow;

  }

  /*optional*/

  .btn-brand:hover {
    border-color: #777;
    background-color: gainsboro;
    color: #fff;
  }

  /* slide1*/
  .slide-1 {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/gambar1.jpg);
  }
  .slide-2 {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/gambar2.jpg);
  }
  .slide-3 {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/gambar3.jpg);
  }

  .bg-cover {
    background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
  }


  .carousel-control-prev,
  .carousel-control-next {
    background-color: rgba(0, 0, 0, 0.5);
    width: 40px;
    height: 70px;
    margin: auto;
  }
  

  #heroSlider h5:after,
  #heroSlider::before {

    width: 40px;
    height: 4px;
    background-color: #fff;
    display: inline-block;
    margin: 10px;
  }
		.jumbotron {
			background-image: url('ginger-garden.jpg');
			background-size: cover;
			background-position: center;
			color: white;
			padding: 5rem 0;
		}
	
  </style>