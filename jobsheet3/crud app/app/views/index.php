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

    <?php include('./layout/navbar.php') ?>

    <div class="container mt-3">
        <h1>Mahasiswa</h1>
        <?php
        if (isset($_GET['status']) && $_GET['status'] === 'success') {
        ?>
            <div class="alert alert-success" id="success-alert" role="alert">
                Berhasil menambahkan data
            </div>
        <?php
        }
        ?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah data
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">program studi</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
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
                        <td><?= $item['tempat_lahir'] ?></td>
                        <td><?= $item['tanggal_lahir'] ?></td>
                        <td><?= $item['jenis_kelamin'] ?></td>
                        <td><?= $item['agama'] ?></td>
                        <td><?= $item['alamat'] ?></td>
                        <td>
                            <a href="edit-mhs.php?id=<?= $item['npm'] ?>&aksi=edit" class="btn btn-warning">edit</a>
                            <a href="./add-action.php?id=<?= $item['npm'] ?>&aksi=hapus" onclick="return confirm('Apakah yakin iniin menghapus')" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>


    <script>
     
    </script>
    <?php include '../views/layout/script.php' ?>
    <script src="./layout/script.js"></script>
    <?php include '../views/component/modalMhs.php' ?>
</body>

</html>