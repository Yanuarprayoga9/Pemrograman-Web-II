<?php 
class Mahasiswa {
    public $nama="Yanuar";
    protected $nim=220302072;

    public function tampilkan_nama() {
        return "Nama Saya Yanuar";
    }

    public function tampilkan_nim(){
        return $this->nim;
    }
}
$yanuar = new Mahasiswa();
echo $yanuar->tampilkan_nama();
echo '<br>';
echo $yanuar->tampilkan_nim();
?>
