<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="card-header">
        <h3>Tambahkan Reservasi</h3>
    </div>
    <div class="card-body">
        <?php if(!empty(session()->getFlashdata('eror'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Elemen Form</h4>
        </hr />
        <?php echo session()->getFlashdata('eror'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <?php endif; ?>
            <form method="post" action="<?=base_url('resto/reservasi') ?>">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>">
            </div>
            
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>">
            </div>

            <div class="form-group">
                <label for="email">Jumlah Orang</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= old('jumlah') ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Tanggal Reservasi</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal"><?= old('tanggal') ?>
            </div>

            <div class="form-group">
                <a href="<?=base_url('resto/beranda') ?>" class="btn btn-info">Kembali</a>
                <input type="submit" value="simpan" class="btn btn-info"/>
            </div>
        </form>
        </div>    
    </div>

    
    </body>
</html>