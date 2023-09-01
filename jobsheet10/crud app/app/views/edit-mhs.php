<?php
include '../classes/Database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../views/layout/head.php' ?>
</head>

<body>
    <?php include '../views/layout/navbar.php' ?>
    <div class="container mt-3">
        <h1>Edit Mahasiswa</h1>
    </div>

    <div class="container my-3">
        <?php include './component/edit-formMhs.php' ?>
    </div>

    <?php include '../views/layout/script.php' ?>
</body>

</html>