<?php 
class Mahasiswa{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;
    }
    function getAllMahasiswa(){
        $query = "select * from mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
    
        return $result;
    }
    function createMahasiswa($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "INSERT INTO mahasiswa (npm, program_study, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat) 
                  VALUES ('$npm', '$program_study', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }
}

?>