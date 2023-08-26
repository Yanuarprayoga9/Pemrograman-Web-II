<?php
include '../classes/Database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../views/layout/head.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include '../views/layout/navbar.php' ?>
    <div class="container mt-3">
        <h1>Mahasiswa</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah data
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">program studi</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 1;
                foreach ($db->tampil_mahasiswa() as $item) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['npm'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['program_study'] ?></td>
                        <td>
                            <a href="edit-mhs.php?id=<?= $item['npm'] ?>&aksi=edit">edit</a>
                            <a href="./add-action.php?id=<?= $item['npm'] ?>&aksi=hapus">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>



    <?php include '../views/layout/script.php' ?>
    <?php include '../views/layout/modaladd.php' ?>
</body>

</html>