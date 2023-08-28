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
    public function createDosen($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "INSERT INTO Dosen (nip, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat) 
                  VALUES ('$nip', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }

    public function getDosenById($id) {
        $data = mysqli_query($this->koneksi, "select * from Dosen where nip = $id");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    public function updateDosen($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
        $query = "UPDATE Dosen SET nip = '$nip', program_study , nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat' WHERE nip = $id";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteDosen($id){
        mysqli_query($this->koneksi,"DELETE from Dosen where nip='$id'");
    }
}

?>