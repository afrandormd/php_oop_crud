<?php
include 'database.php';

$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    // tambah data
    $db->tambah_data($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header(('location:index.php'));
} else if ($aksi == 'update') {
    $db->update_data($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header(('location:index.php'));
}  else if ($aksi == 'hapus') {
    $db->delete_data($_GET['id']);
    header(('location:index.php'));
}

?>