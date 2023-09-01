<?php
include '../../config.php';
include '../../controllers/KrsController.php';

$database = new Database();
$db = $database->get_koneksi();
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $pengampu = $_POST['pengampu'];
    $jadwal_mata_kuliah = $_POST['jadwal_mata_kuliah'];

    $krsController = new KrsController($db); // Ganti $mahasiswaController menjadi $krsController
    $result = $krsController->createKrs($nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah); // Menyesuaikan parameter

    header("location:index.php?status=success");
}
?>
