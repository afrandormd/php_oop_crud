<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CRUD OOP PHP MySQL</title>
</head>

<body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <h4>Tambah Data User</h4>
        <!-- Form Input Data -->
        <form method="POST" action="proses.php?aksi=tambah">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="nohp" name="nohp">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <!-- End Form Input Data -->
    </div>
</body>

</html>