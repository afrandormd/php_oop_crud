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
        var_dump($rows); 
    }
}
?>