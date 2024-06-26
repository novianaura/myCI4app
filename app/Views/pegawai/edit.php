<?= $this->extend('pegawai/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card-header">
        <h3>Update Data Pegawai</h3>
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
            <form method="post" action="<?=base_url('pegawai/update/' .$pegawai->id_pegawai) ?>">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai->nama; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="pria" <?= ($pegawai == "pria" ? "selected": "");?>>Pria</option>
                    <option value="wanita" <?= ($pegawai == "wanita" ? "selected": "");?>>Wanita</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $pegawai->no_telp; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $pegawai->email; ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"><?= $pegawai->alamat; ?></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="simpan" class="btn btn-info"/>
            </div>
        </form>
        </div>    
    </div>
<?= $this->endSection('content'); ?>