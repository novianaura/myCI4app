<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Template Pegawai</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png" type="image/png">
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
      </div>  </body>