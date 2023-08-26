<?php 
class Manusia{
    public $nama_saya;
    
    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    
    function tampil_nama(){
        return $this->nama_saya;
    }
}

class Mahasiswa extends Manusia{
    public $nama_mahasiswa;
    
    public function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
}

class Dosen extends Mahasiswa{
    protected $nama_dosen;
    
    public function panggil_dosen($dosen){
        $this->nama_dosen = $dosen;
    }

    public function tampilNama_dosen(){
        return $this->nama_dosen;
    }
}

$informatika = new Mahasiswa();
$informatika->panggil_nama("Yanuar");
$informatika->panggil_mahasiswa("Prayoga");

$dosen = new Dosen();
$dosen->panggil_nama("Abdau Pd");
$dosen->panggil_mahasiswa("MahasiswaDosen");

$dosen->panggil_dosen("NamaDosen");

echo "Nama manusia = " . $informatika->tampil_nama() . '<br>';
echo "Nama mahasiswa = " . $informatika->nama_mahasiswa . '<br>';
echo "Nama dosen = " . $dosen->tampilNama_dosen() . '<br>';
?>
