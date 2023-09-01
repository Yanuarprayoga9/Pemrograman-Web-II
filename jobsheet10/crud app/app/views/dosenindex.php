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
   <?php include('./layout/navbar.php')?>
    <div class="container mt-3">
        <h1>Dosen</h1>
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
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
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
                foreach ($db->tampil_dosen() as $item) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['nip'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['tempat_lahir'] ?></td>
                        <td><?= $item['tanggal_lahir'] ?></td>
                        <td><?= $item['jenis_kelamin'] ?></td>
                        <td><?= $item['agama'] ?></td>
                        <td><?= $item['alamat'] ?></td>
                        <td>
                            <a href="edit-dosen.php?id=<?= $item['nip'] ?>&aksi=editdosen" class="btn btn-warning">edit</a>
                            <a href="./add-action.php?id=<?= $item['nip'] ?>&aksi=hapusdosen" onclick="return confirm('Apakah yakin ingin menghapus')" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>



    <?php include '../views/layout/script.php' ?>
    <script src="./layout/script.js"></script>
    <?php include '../views/component/modalDosen.php' ?>
</body>

</html>