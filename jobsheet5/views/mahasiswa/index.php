<?php
include_once '../../config.php';
include_once '../../models/Mahasiswa.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';
$database = new Database();
$db = $database->get_koneksi();
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>
<div class="container mt-3">
    <h1>Mahasiswa</h1>
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
            foreach ($mahasiswa as $item) {
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
                        <a href="mahasiswaEdit?id=<?= $item['npm'] ?> " class="btn btn-warning">edit</a>
                        <a href="http://localhost/pweb2/jobsheet5/views/mahasiswa/delete.php?id=220302075&aksi=hapus?id=<?= $item['npm'] ?>&aksi=hapus" onclick="return confirm('Apakah yakin ingin menghapus')" class="btn btn-danger">hapus</a>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>

<script>
    function removeAlert() {
        var alertDiv = document.getElementById("success-alert");
        if (alertDiv) {
            alertDiv.remove();
        }
    }

    setTimeout(removeAlert, 1500);
</script>

<?php include '../layout/script.php' ?>
<script src="../../public/assets/js/script.js"></script>
<?php include '../layout/modaladd.php' ?>
</body>

</html>