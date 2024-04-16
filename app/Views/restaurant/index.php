<?= $this->extend('restaurant/template'); ?>
<?= $this->section('content'); ?>
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

    <section id="promo">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-4">
            <img src="images/promo.png" alt="">
          </div>

          <div class="col-lg-5 ">
            <h1> Promo </h1>
            <div class="divider my-2">
              <p> Jelajahi variasi terbaik dari dapur kami melalui Menu Degustation Spesial Malam Ini.</p>
              <p> Setiap hidangan dirancang untuk mengajak Anda dalam perjalanan kuliner yang tak terlupakan.</p>
              <a href="" class="btn btn-brand"> Lihat Promo </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="my-3">
    <section class="menu ">
      <div class="container  text-center mt-1">
        <div class="row">
          <div class="col-100 intro-text">
            <h1> Menu utama </h1>
            <p> Nikmati kelezatan dari seleksi menu utama kami yang dirancang khusus untuk memanjakan selera Anda.</p>
          </div>
        </div>
      </div>
  <div class="container">
      <div class="row">
          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/pastaa.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Pasta </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/lobster.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Lobster Butter </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/steak.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Steak </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/bruscheta.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Bruschetta</h5>
                            <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/sushi.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Sushi </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-md-4">
                <div class="card">
                <div class="card d-flex">
                    <img src="images/iga.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Iga Bakar </h5>
                        <a href="#" class="btn btn-primary"> Lihat </a>
                    </div>
                </div>
            </div>
          </div>

      </section>
<?= $this->endSection('content'); ?>