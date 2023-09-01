<?php
include_once '../../config.php';
include_once '../../models/Mahasiswa.php';
include_once '../../controllers/MahasiswaController.php';

$database = new Database();
$db= $database->get_koneksi();
$mahasiswaController = new MahasiswaController($db);
if (isset($_GET['id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $npm = $_POST['npm'];
        $program_study = $_POST['program_study'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        $mahasiswaController->updateMahasiswa($_GET['id'], $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

        header('Location: index.php'); 
        exit();
    }
}
?>