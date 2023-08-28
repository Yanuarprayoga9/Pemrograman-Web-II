<?php 
class Manusia{
    private $nama_saya;
     
    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    
    function tampil_nama(){
        return $this->nama_saya;
    }
}

class Mahasiswa extends Manusia{
    protected $nama_mahasiswa;
    
    public function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
    public function panggil_namaManusia($mahasiswa){
        $this->nama_saya = $mahasiswa;
    }
}

class Dosen extends Mahasiswa{
    protected $nama_dosen;
    
    public function panggil_dosen($dosen){
        $this->nama_mahasiswa = $dosen;
    }

    public function tampilNama_dosen(){
        return $this->nama_dosen;
    }
}

$informatika = new Mahasiswa();
$informatika->panggil_nama("Yanuar");
$informatika->panggil_mahasiswa("Prayoga");

$dosen = new Dosen();
$dosen->panggil_dosen("Abdau Pd");

echo "Nama manusia = " . $informatika->tampil_nama() . '<br>';
echo "Nama mahasiswa = " . $informatika->nama_mahasiswa . '<br>';
echo "Nama dosen = " . $dosen->tampilNama_dosen() . '<br>';
?>
