<?php 
class Dosen{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;
    }
    public function getAllDosen(){
        $query = "select * from Dosen";
        $result = mysqli_query($this->koneksi, $query);
    
        return $result;
    }
    public function createDosen($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "INSERT INTO Dosen (npm, program_study, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat) 
                  VALUES ('$npm', '$program_study', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }

    public function getDosenById($id) {
        $data = mysqli_query($this->koneksi, "select * from Dosen where npm = $id");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    public function updateDosen($id, $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "UPDATE Dosen SET npm = '$npm', program_study = '$program_study', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat' WHERE npm = $id";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteDosen($id){
        mysqli_query($this->koneksi,"DELETE from Dosen where npm='$id'");
    }
}

?>