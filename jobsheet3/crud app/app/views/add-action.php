<?php

include '../classes/Database.php';
$db = new Database();
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $npm = $_POST['npm'];
    $program_study = $_POST['program_study'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $db->tambah_mahasiswa($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);


    header("Location: ../views/index.php"); 
    exit;
}elseif($aksi == "update") {
    $id = $_GET['id'];
    $npm = $_POST['npm'];
    $program_study = $_POST['program_study'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $db->update_mahasiswa($id,$npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);


    header("Location: ../views/index.php"); 
    exit;
}elseif($aksi == "hapus"){

    $db->hapus($_GET['id']);
    header("Location: ../views/index.php"); 
    exit;
}



// Dosen
if ($aksi == "tambahdosen") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $db->tambah_dosen($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);


    header("Location: ../views/dosenindex.php"); 
    exit;
}elseif($aksi == "updatedosen") {
    $id = $_GET['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $db->update_dosen($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);


    header("Location: ../views/dosenindex.php"); 
    exit;
}elseif($aksi == "hapusdosen"){

    $db->hapus_dosen($_GET['id']);
    header("Location: ../views/dosenindex.php"); 
    exit;
}
?>
