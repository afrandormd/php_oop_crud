<?php include 'database.php' ; $db=new Database(); ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" Document content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <title>CRUD OOP PHP MySQL</title>
    </head>

    <body>
        <div class="container">
            <h1 align="center">CRUD OOP PHP</h1>
            <table class="table mt-3" border="1">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->tampil_data() as $siswa) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $siswa['id']?></th>
                            <td><?php echo $siswa['nama'];?></td>
                            <td><?php echo $siswa['alamat'];?></td>
                            <td><?php echo $siswa['nohp'];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $siswa['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="proses.php?id=<?php echo $siswa['id'];?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="input.php" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
    </body>

    </html>