<?php
include_once '../../config.php';
include_once '../../models/Mahasiswa.php';
include_once '../../controllers/MahasiswaController.php';

$database = new Database();
$db= $database->get_koneksi();
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getMahasiswaById($_GET['id']);
if (isset($_GET['id'])) {
    $mahasiswa = $mahasiswaController->getMahasiswaById($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Update the Mahasiswa record
        $npm = $_POST['npm'];
        $program_study = $_POST['program_study'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        $mahasiswaController->updateMahasiswa($_GET['id'], $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

        // Redirect back to the Mahasiswa list
        header('Location: index.php'); // Replace with the actual URL
        exit();
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
    <div class="container mt-3">
        <h1>Edit Mahasiswa</h1>
    <div class="container my-3">
        <?php include'../layout/edit-form.php'?>
    </div>

    <?php include '../layout/script.php' ?>
    <?php include '../layout/modaladd.php' ?>
</body>

</html>