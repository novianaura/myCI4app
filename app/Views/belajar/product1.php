    <?= $this -> extend('belajar/template')?>
    <?= $this -> section('content')?>
    
    <div class="jumbotron">
        <div class="container">
            <h1> The Loucius </h1>
            <p>Temukan cita rasa yang tak terlupakan</p>
        </div>
    </div>
    <div class="container">
        <h2 class="mb-4">Menu Makanan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/makanan1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Prancis </h5>
                        <p class="card-text"> Makanan Prancis terkenal dengan perpaduan rasa yang kompleks, penyajian yang indah, dan perhatian terhadap detail dalam setiap langkah persiapannya.</p>
                        <a href="#" class="btn btn-primary"> Pesan </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/makanan2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Indonesia </h5>
                        <p class="card-text">Makanan Indonesia mencerminkan kekayaan budaya dan keberagaman alam Indonesia, serta memanfaatkan rempah-rempah dan bumbu-bumbu tradisional yang memberikan rasa unik pada setiap hidangan.</p>
                        <a href="#" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/makanan3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Korea </h5>
                        <p class="card-text">Makanan Korea terkenal dengan kelezatannya, serta kombinasi rasa yang seimbang antara manis, gurih, pedas, dan asin.</p>
                        <a href="#" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?= $this -> endSection()?>
    </div>
