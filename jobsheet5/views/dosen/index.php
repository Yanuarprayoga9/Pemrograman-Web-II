<?php
include_once '../../config.php';
include_once '../../models/Dosen.php';
include_once '../../controllers/DosenController.php';

$database = new Database();
$db = $database->get_koneksi();
$DosenController = new DosenController($db);
$Dosen = $DosenController->getAllDosen();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layout/head.php' ?></head>

<body>
    <?php include '../layout/navbar.php' ?>
    <div class="container mt-3">
        <h1>Dosen</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah data
        </button>
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
                foreach ($Dosen as $item) {
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
                            <a href="edit-mhs.php?id=<?= $item['nip'] ?>">edit</a>
                            <a href="delete.php?id=<?= $item['nip'] ?>&aksi=hapus" onclick="return confirm('Apakah yakin iniin menghapus')">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>



    <?php include '../layout/script.php' ?>
    <?php include '../Component-dosen/modaladd.php' ?>
</body>

</html>