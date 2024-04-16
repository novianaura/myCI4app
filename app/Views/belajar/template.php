<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> template </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .jumbotron {
            background-image: url('images/banner.png');
            background-size: cover;
            height: 600px;
            position: relative;
        }
        .jumbotron .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .card {
            margin-bottom: 20px;
              overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<div class="all-container">
   <nav class="navbar navbar-expand-sm justify-content-center" style="background-color:rgba(255, 255, 255, 0.7); ">
      <a class="navbar-brand mr-auto" href="#" style="color: black;">
         The Luscious
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;"> Beranda </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;"> Promo </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;"> Galeri </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;"> About </a>
        </li>
      </ul>
  </nav>
</div>
<div class="jumbotron"></div>
    <div class="container">
        <h2 class="mb-4 text-center">Menu Makanan</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/makanan1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Prancis </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>
            <div class="col-md-4">
                <div class="card">
                  <div class="card d-flex">
                    <img src="images/makanan2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Indonesia </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                  <div class="card d-flex">
                    <img src="images/makanan3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Korea </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<main>
  <?= $this -> renderSection('content')?>
</main>

<footer class="bg-dark text-white text-center py-3">
  <div class="container text-center">
    <span class="text-muted"> &copy; 2024 Toko Kue. All rights reserved. </span>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
