<?php
include '../../config.php';
include '../../controllers/MahasiswaController.php';

$database = new Database();
$db = $database->get_koneksi();
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nim, $nama,$jenis_kelamin,$alamat);

    header("location:index.php?status=success");
}
