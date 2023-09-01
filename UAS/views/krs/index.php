<?php
include_once '../../config.php';
include_once '../../models/KRS.php';
include_once '../../controllers/krsController.php';

$database = new Database();
$db= $database->get_koneksi();
$mahasiswaController = new KrsController($db);
$mahasiswa = $mahasiswaController->getAllKrs();
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
        <h1>KRS</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah data
        </button>
        <?php
        if (isset($_GET['status']) && $_GET['status'] === 'success') {
        ?>
            <div class="alert alert-success" id="success-alert" role="alert">
                Berhasil menambahkan data
            </div>
        <?php
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama matakuliah</th>
                    <th scope="col">jenis kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 1;
                foreach ($mahasiswa as $item) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['Nim'] ?></td>
                        <td><?= $item['mata_kuliah'] ?></td>
                        <td><?= $item['pengampu'] ?></td>
                        <td><?= $item['jadwal_mata_kuliah'] ?></td>
                        <td>
                            <a href="edit-krs.php?id=<?= $item['id'] ?> "  class="btn btn-warning">edit</a>
                            <a href="delete.php?id=<?= $item['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus')" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>



    <?php include '../layout/script.php' ?>
    <script src="../../public/assets/js/script.js"></script>
    <?php include '../component/modaladd.php' ?>
</body>

</html>