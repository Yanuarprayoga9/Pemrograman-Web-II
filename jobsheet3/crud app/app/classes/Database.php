<?php 
class Database {
    var $host = "localhost"; 
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;
    function __construct() {
        $this->koneksi =mysqli_connect($this->host, $this->username, $this->password, $this->db);
       
    }
    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi,"select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tambah_mahasiswa($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "INSERT INTO mahasiswa (npm, program_study, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat) 
                  VALUES ('$npm', '$program_study', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }
}



?>