<?php 
class Book{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;
    }
    public function getAllBook(){
        $query = "select * from Book";
        $result = mysqli_query($this->koneksi, $query);
    
        return $result;
    }
    public function createBook($judul, $pengarang, $tahun_terbit, $harga, $jenis_kelamin, $agama, $alamat) {
        $query = "INSERT INTO Book (nip, pengarang, tahun_terbit, harga, jenis_kelamin, agama, alamat) 
                  VALUES ('$judul', '$pengarang', '$tahun_terbit', '$harga', '$jenis_kelamin', '$agama', '$alamat')";
        mysqli_query($this->koneksi, $query);
    }

    // public function getBookById($id) {
    //     $data = mysqli_query($this->koneksi, "select * from Book where nip = $id");
    //     while($d = mysqli_fetch_array($data)){
    //         $hasil[] = $d;
    //     }
    //     return $hasil;
    // }
    // public function updateBook($id, $judul, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat) {
    //     $query = "UPDATE Book SET nip = '$judul' , nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat' WHERE nip = $id";
    //     mysqli_query($this->koneksi, $query);
    // }

    // public function deleteBook($id){
    //     mysqli_query($this->koneksi,"DELETE from Book where nip='$id'");
    // }
}

?>