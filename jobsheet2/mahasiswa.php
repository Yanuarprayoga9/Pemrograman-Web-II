<?php
class dosen {
    private $nidn = 220302072;
    var $nama = 'Yanuar Prayoga';
    var $prodi = 'Teknik informatika';

    public function tampil_nama() {
        return 'Nama saya adalah ' . $this->nama;
    }
   
    public function tampil_prodi() {
        return 'Prodi = ' . $this->prodi;
    }
}

$yanuar = new dosen();//
echo $yanuar->tampil_nama();
echo '<br>';
echo $yanuar->tampil_prodi();
?>
