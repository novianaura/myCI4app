<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Reservasi</h3>
        </div>
        <div class="card-body">
            <?php if(!empty(session()->getFlashdata('message'))):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?=base_url('/resto/reservasi'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Jumblah Orang</th>
                    <th>Tanggal Reservasi</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($reservasi as $row){
                    ?>
                    <tr>
                        <td><?=$no++; ?></td>
                        <td><?=$row->nama; ?></td>
                        <td><?=$row->no_telp; ?></td>
                        <td><?=$row->jumblah_orang; ?></td>
                        <td><?=$row->tgl_reservasi; ?></td>
                        <td>
                        <a title="Edit" href="<?= base_url("resto/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                        <a title="Delete" href="<?= base_url("resto/delete/$row->id"); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>