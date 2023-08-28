<!-- File: functions.php -->

<?php
function hitungLuasLingkaran($jariJari)
{
    $luas = pi() * $jariJari * $jariJari;
    return $luas;
}

function hitungLuasPersegi($sisi)
{
    $luas = $sisi * $sisi;
    return $luas;
}

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
    <h2>Perhitungan Luas</h2>
    <form method="post">
        <label>Jari-Jari Lingkaran:</label>
        <input type="number" name="jariJariLingkaran">
        <br>
        <input type="submit" name="hitungLingkaran" value="Hitung Luas Lingkaran">
    </form>
    <br><br>
    <form method="post">
        <label>Sisi Persegi:</label>
        <input type="number" name="sisiPersegi">
        <br>
        <input type="submit" name="hitungPersegi" value="Hitung Luas Persegi">
    </form>
    <br><br>
    <form method="post">
        <label>Alas Segitiga:</label>
        <input type="number" name="alasSegitiga">
        <label>Tinggi Segitiga:</label>
        
        <input type="number" name="tinggiSegitiga">
        <br>
        <input type="submit" name="hitungSegitiga" value="Hitung Luas Segitiga">
    </form>
    <br>
    <?php
    if (isset($_POST['hitungLingkaran'])) {
        $jariJariLingkaran = $_POST['jariJariLingkaran'];
        echo "Luas Lingkaran dengan jari-jari $jariJariLingkaran adalah: " . hitungLuasLingkaran($jariJariLingkaran);
    }

    if (isset($_POST['hitungPersegi'])) {
        $sisiPersegi = $_POST['sisiPersegi'];
        echo "Luas Persegi dengan sisi $sisiPersegi adalah: " . hitungLuasPersegi($sisiPersegi);
    }

    if (isset($_POST['hitungSegitiga'])) {
        $alasSegitiga = $_POST['alasSegitiga'];
        $tinggiSegitiga = $_POST['tinggiSegitiga'];
        echo "Luas Segitiga dengan alas $alasSegitiga dan tinggi $tinggiSegitiga adalah: " . hitungLuasSegitiga($alasSegitiga, $tinggiSegitiga);
    }
    ?>
</body>

</html>
