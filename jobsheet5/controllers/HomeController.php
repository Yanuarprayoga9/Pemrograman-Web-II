<?php 
class HomeController{
    public function home(){
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }
    public function mahasiswaEdit(){
        $npm = $_GET['id'];
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/edit-mhs.php?id=$npm");
    }
    public function dosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index.php");
    }
    
}


?>