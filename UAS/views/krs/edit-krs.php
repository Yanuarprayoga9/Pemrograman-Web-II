<?php
include_once '../../config.php';
include_once '../../models/KRS.php';
include_once '../../controllers/krsController.php';

$database = new Database();
$db = $database->get_koneksi();
$krsController = new krsController($db);
$krs = $krsController->getKrsById($_GET['id']);
if (isset($_GET['id'])) {
    $krs = $krsController->getKrsById($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nim = $_POST['nim'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $pengampu = $_POST['pengampu'];
        $jadwal_mata_kuliah = $_POST['jadwal_mata_kuliah'];

        $krsController->updateKrs($_GET['id'], $nim, $mata_kuliah, $pengampu,  $jadwal_mata_kuliah);

        header('Location: index.php');
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
            <?php include '../component/edit-form.php' ?>
        </div>

        <?php include '../layout/script.php' ?>
</body>

</html>