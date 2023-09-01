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
        <h1>book</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah data
        </button>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $no = 1;
                foreach ($db->tampil_book() as $item) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['pengarang'] ?></td>
                        <td><?= $item['tahun_terbit'] ?></td>
                        <td>Rp <?= $item['harga'] ?></td>
                        
                        <td>
                            
                              <a href="edit-book.php?id=<?= $item['id'] ?> "  class="btn btn-warning">edit</a> 
                            <a href="add-action.php?id=<?= $item['id'] ?>&aksi=hapusbook" class="btn btn-danger" onclick="">hapus</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>



    <?php include '../views/layout/script.php' ?>
    <script src="./layout/script.js"></script>
    <?php include '../views/component/modalbook.php' ?>
</body>

</html>