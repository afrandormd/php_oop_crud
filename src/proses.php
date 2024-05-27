<?php
include 'database.php';

$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    // tambah data
    $db->tambah_data($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header(('location:index.php'));
}

?>