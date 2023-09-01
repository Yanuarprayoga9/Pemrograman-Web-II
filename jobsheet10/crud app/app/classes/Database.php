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
    function edit_mahasiswa($id) {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where npm = $id");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update_mahasiswa($id, $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "UPDATE mahasiswa SET npm = '$npm', program_study = '$program_study', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat' WHERE npm = $id";
        mysqli_query($this->koneksi, $query);
    }
    function hapus($id){
        mysqli_query($this->koneksi,"DELETE from mahasiswa where npm='$id'");
    }





    // Method For Dosen
   
    function tampil_book() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_book($judul, $pengarang, $tahun_terbit, $harga) {
        $query = "INSERT INTO buku (judul, pengarang, tahun_terbit, harga) 
                  VALUES ('$judul', '$pengarang', $tahun_terbit, $harga)";
        mysqli_query($this->koneksi, $query);
    }

    function edit_book($id) {
        $data = mysqli_query($this->koneksi, "SELECT * FROM buku WHERE id = '$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_book($id, $judul, $pengarang, $tahun_terbit, $harga) {
        $query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', tahun_terbit = $tahun_terbit, harga = $harga WHERE id = $id";
        mysqli_query($this->koneksi, $query);
    }

    function hapus_book($id) {
        mysqli_query($this->koneksi, "DELETE FROM buku WHERE id = $id");
    }
}



?>
