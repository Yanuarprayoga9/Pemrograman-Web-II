<?php
include_once '../config.php';
include_once '../models/Book.php';
include_once '../controllers/BookController.php';

$database = new Database();
$db = $database->get_koneksi();
$BookController = new BookController($db);
$Book = $BookController->getAllBook();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <div class="container mt-3">
        <h1>Book</h1>
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
                foreach ($Book as $item) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['pengarang'] ?></td>
                        <td><?= $item['tahun_terbit'] ?></td>
                        <td><?= $item['harga'] ?></td>
                        
                        <td>
                            action
                            <!-- <a href="edit-mhs.php?id=<?= $item['name'] ?> "  class="btn btn-warning">edit</a>
                            <a href="delete.php?id=<?= $item['name'] ?>&aksi=hapus" class="btn btn-danger">hapus</a> -->
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>


</body>

</html>