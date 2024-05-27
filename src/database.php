<?php
class Database
{
    // Property
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $db = "php_crud";
    public $connect;

    // Fungsi untuk koneksi ke database
    function __construct()
    {
        $this -> connect = mysqli_connect($this->host, $this->username, $this->pass);
        mysqli_select_db($this->connect, $this->db);
    }

    // Fungsi untuk tampilkan data dari database
    function tampil_data()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM user");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    // Fungsi untuk tambah data
    function tambah_data($nama, $alamat, $nohp)
    {
        mysqli_query($this->connect, "INSERT INTO user (`id`, `nama`, `alamat`, `nohp`) VALUES (NULL, '$nama', '$alamat', '$nohp')");
    }

    // Fungsi untuk edit data
    function edit_data($id)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM user WHERE id='$id' ");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    function update_data($id, $nama, $alamat, $nohp){
        mysqli_query($this->connect, "UPDATE user SET nama = '$nama', alamat = '$alamat', nohp = '$nohp' WHERE user. id = '$id'");
    }

    // Fungsi untuk hapus data
    function delete_data($id)
    {
        mysqli_query($this->connect, "DELETE FROM user WHERE user. id = '$id' ");
    }
}
?>