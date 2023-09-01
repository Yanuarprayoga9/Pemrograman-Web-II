<?php 
class Database {
    var $host = "localhost"; 
    var $username = "root";
    var $password = "";
    var $db = "uas";
    var $koneksi;
    function get_koneksi() {
        $this->koneksi =mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if(!$this->koneksi){
            die("Koneksi database gagal : ".mysqli_connect_errno());
        }
        return $this->koneksi;
       
    }
   
}



?>