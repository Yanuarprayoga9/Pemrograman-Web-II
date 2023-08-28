<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new Database();
$db = $database->get_koneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new DosenController($db);
    $result = $mahasiswaController->deleteDosen($id);

    header("location:index.php");
}
