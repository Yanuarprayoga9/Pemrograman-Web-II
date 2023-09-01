<?php
include_once '../../config.php';
include_once '../../models/Mahasiswa.php';
include_once '../../controllers/MahasiswaController.php';

$database = new Database();
$db = $database->get_koneksi();
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getMahasiswaById($_GET['id']);

if (isset($_POST['npm'])) {
    $npm = $_POST['npm'];
    $program_study = $_POST['program_study'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaController->updateMahasiswa($_GET['id'], $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        header('Location: index.php'); 

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layout/head.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include '../layout/navbar.php' ?>
    <div class="container m-5 w-50 mx-auto">
        <h1>Edit Mahasiswa</h1>
        <div class="container my-3">
            <form action="edit-mhs.php?id=<?php echo $_GET['id']; ?>" method="post">
                <?php
                foreach ($mahasiswa as $item) {
                ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="number" class="form-control" name="npm" value="<?php echo $item['npm']; ?>">
                        <input type="number" class="form-control" name="id" value="<?php echo $_GET['id']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $item['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">program studi</label>
                        <input type="text" class="form-control" name="program_study" value="<?php echo $item['program_study']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $item['tempat_lahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">tanggall lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $item['tanggal_lahir']; ?>">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" <?php echo ($item['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="jenis_kelamin1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan" <?php echo ($item['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">agama</label>
                        <input type="text" class="form-control" name="agama" value="<?php echo $item['agama']; ?>">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="alamat" id="floatingTextarea2" style="height: 100px" name="alamat"><?php echo $item['alamat']; ?></textarea>
                        <label for="floatingTextarea2">Alamat</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
            </form>
        <?php
                }
        ?>
        </div>

        <?php include '../layout/script.php' ?>
        <?php include '../layout/modaladd.php' ?>
</body>

</html>