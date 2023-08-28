<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new Database();
$db = $database->get_koneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->deleteMahasiswa($id);

    header("location:index.php");
}
