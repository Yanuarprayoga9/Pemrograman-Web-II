<!-- File: functions.php -->

<?php
// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jariJari)
{
    $luas = pi() * $jariJari * $jariJari;
    return $luas;
}

// Fungsi untuk menghitung luas persegi
function hitungLuasPersegi($sisi)
{
    $luas = $sisi * $sisi;
    return $luas;
}

// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Function Examples</title>
</head>

<body>
    <?php
    $jariJariLingkaran = 5;
    $sisiPersegi = 4;
    $alasSegitiga = 6;
    $tinggiSegitiga = 8;

    echo "<h2>Hasil Perhitungan:</h2>";

    echo "Luas Lingkaran dengan jari-jari $jariJariLingkaran adalah: " . hitungLuasLingkaran($jariJariLingkaran) . "<br>";
    echo "Luas Persegi dengan sisi $sisiPersegi adalah: " . hitungLuasPersegi($sisiPersegi) . "<br>";
    echo "Luas Segitiga dengan alas $alasSegitiga dan tinggi $tinggiSegitiga adalah: " . hitungLuasSegitiga($alasSegitiga, $tinggiSegitiga) . "<br>";
    ?>
</body>

</html>