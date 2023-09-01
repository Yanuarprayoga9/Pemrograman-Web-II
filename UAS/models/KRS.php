<?php 
class Krs{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;
    }
    public function getAllKrs(){
        $query = "SELECT * FROM krs";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

   

    public function createKrs($nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah) {
        $query = "INSERT INTO krs (Nim, mata_kuliah, pengampu, jadwal_mata_kuliah) 
                  VALUES ('$nim', '$mata_kuliah', '$pengampu', '$jadwal_mata_kuliah')";
        mysqli_query($this->koneksi, $query);
    }

    public function getKrsById($id) {
        $query = "SELECT * FROM krs WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

  
    public function updateKrs($id, $nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah) {
        $query = "UPDATE krs SET Nim='$nim', mata_kuliah='$mata_kuliah', pengampu='$pengampu', jadwal_mata_kuliah='$jadwal_mata_kuliah' 
                  WHERE id='$id'";
        mysqli_query($this->koneksi, $query);
    }

    public function deleteKrs($id){
        mysqli_query($this->koneksi,"DELETE FROM krs WHERE id='$id'");
    }

}

?>