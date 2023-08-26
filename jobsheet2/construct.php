<?php 
class Mahasiswa {
  function __construct() {
    echo "Saya Mahasiswa Teknik Informatika";
    echo "<br>";
  }
  function tampil_nama() {
    echo "Nama saya adalah Yanuar";
    echo "<br>";
  }
  function tampil_mahasiswa() {
    echo "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    echo "<br>";
  }
  function tampil_alamat() {
    echo "Alamat Kebumen";
    echo "<br>";
  }
  function __destruct() {
    echo "Politeknik Negeri Cilacap";
    echo "<br>";
  }
}

$yanuar = new Mahasiswa();
$yanuar->tampil_nama();
$yanuar->tampil_mahasiswa();
$yanuar->tampil_alamat();





class MahasiswaCoba {
   private $nim;
   private $nama;
   private $alamat;

   function __construct($nim,$nama,$alamat) {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->alamat = $alamat;

  }

function __destruct(){
    'Halo nama saya '.$this->nama.' nidn saya '.$this->nim.' alamat saya '.$this->alamat;

  }
  function tampil_nama() {
    return 'Nama saya adalah'.$this->nama;
  }
  function tampil_alamat() {
    return $this->alamat;
  }
 
}
$yanuar = new MahasiswaCoba(220302072,'Yanuar Prayoga','Kebumen');
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo 'Nama = '.$yanuar->tampil_nama();
echo '<br>';
echo 'alamat = '.$yanuar->tampil_alamat();
echo '<br>';
?>