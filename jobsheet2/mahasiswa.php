<?php 
class mahasiswa {
   public $nim=220302072;
   public $nama="Yanuar Prayoga";
   public $alamat="Kebumen";

   function __construct($nim,$nama,$alamat) {
    $this->nama = $nim;
    $this->nama = $nama;
    $this->nama = $alamat;
  }
//   function __destruct() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
  function tampil_nama() {
    return $this->nama;
  }
  function tampil_alamat() {
    return $this->alamat;
  }
}
$yanuar = new mahasiswa();
echo 'Nama = '.$yanuar->tampil_nama();
echo '<br>';
echo 'alamat = '.$yanuar->tampil_alamat();
?>