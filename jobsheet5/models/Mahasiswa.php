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

    function getMahasiswaById($id) {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where npm = $id");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function updateMahasiswa($id, $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "UPDATE mahasiswa SET npm = '$npm', program_study = '$program_study', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat' WHERE npm = $id";
        mysqli_query($this->koneksi, $query);
    }
}

?>