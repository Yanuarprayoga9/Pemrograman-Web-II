<?php
include_once '../../config.php';
include_once '../../models/Dosen.php';
include_once '../../controllers/DosenController.php';

$database = new Database();
$db = $database->get_koneksi();
$dosenController = new DosenController($db);
$dosen = $dosenController->getDosenById($_GET['id']);
if (isset($_GET['id'])) {
    $dosen = $dosenController->getDosenById($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        $dosenController->updateDosen($_GET['id'], $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

        header('Location: index.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layout/head.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include '../layout/navbar.php' ?>

    <div class="container m-5 w-50 mx-auto">
        <h1 class="container my-3">Edit Dosen</h1>
        <?php include '../Component-dosen/edit-form.php' ?>
    </div>

    <?php include '../layout/script.php' ?>
    <?php include '../layout/modaladd.php' ?>
</body>

</html>