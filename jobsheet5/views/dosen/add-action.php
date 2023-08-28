<?php
include '../../config.php';
include '../../controllers/DosenController.php';

$database = new Database();
$db = $database->get_koneksi();
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $DosenController = new DosenController($db);
    $result = $DosenController->createDosen($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

    header("location:index.php");
}
