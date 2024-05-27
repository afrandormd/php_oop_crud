<?php 
include 'database.php'; 
$db=new Database(); 

// mengambil url by id
$detail = $db->edit_data($_GET['id']);
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
        <h4>Edit Data User</h4>
        <!-- Form Edit Data -->
        <form method="POST" action="proses.php?aksi=update">
            <?php
                foreach($detail as $siswa){
            ?>
            <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat"><?php echo $siswa['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="<?php echo $siswa['nohp']; ?>">
            </div>
            <?php
                } 
            ?>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
        <!-- End Form Edit Data -->
    </div>
</body>

</html>