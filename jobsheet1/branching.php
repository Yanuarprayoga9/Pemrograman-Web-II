<?php

function branching($angka){
    if ($angka > 0) {
        echo "Angka $angka adalah bilangan positif.";
    } elseif ($angka < 0) {
        echo "Angka $angka adalah bilangan negatif.";
    } else {
        echo "Angka $angka adalah nol.";
    }
}

if (isset($_POST['submit'])) {
    $inputAngka = intval($_POST['angka']);
    branching($inputAngka);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Branching Function</title>
</head>
<body>
    <form method="post">
        Masukkan angka: <input type="number" name="angka">
        <input type="submit" name="submit" value="Cek">
    </form>
</body>
</html>
