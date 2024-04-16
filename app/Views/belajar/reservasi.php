<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Reservasi Restoran</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Form Reservasi Restoran</h2>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Reservasi:</label>
                <input type="date" class="form-control" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jumlah_orang">Jumlah Orang:</label>
                <input type="number" class="form-control" name="jumblah_orang" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Telepon:</label>
                <input type="date" class="form-control" name="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Reservasi Sekarang</button>
        </form>
    </div>
</body>
</html>
