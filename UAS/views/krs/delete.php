<?php
include_once '../../config.php';
include_once '../../controllers/krsController.php';

$database = new Database();
$db = $database->get_koneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $krsController = new krsController($db);
    $result = $krsController->deleteKrs($id);

    header("location:index.php");
}
