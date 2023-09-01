<?php 
class Mahasiswa{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;
    }
    public function getAllMahasiswa(){
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nim, $nama, $jenis_kelamin, $alamat) {
        $query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat) 
                  VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }

    public function getMahasiswaByNIM($nim) {
        $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateMahasiswa($id, $nim, $nama, $jenis_kelamin, $alamat) {
        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' 
                  WHERE nim='$id'";
        mysqli_query($this->koneksi, $query);
    }
    

    public function deleteMahasiswa($nim){
        mysqli_query($this->koneksi,"DELETE FROM mahasiswa WHERE nim='$nim'");
    }
}

?>