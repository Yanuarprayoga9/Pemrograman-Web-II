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
}

?>