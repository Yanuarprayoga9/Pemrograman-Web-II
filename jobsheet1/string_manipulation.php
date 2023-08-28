<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $inputString = "Selamat belajar PHP!";

    $uppercaseString = strtoupper($inputString);

    $lowercaseString = strtolower($inputString);

    $cutString = substr($inputString, 8);

    echo "<h2>String Asli:</h2>";
    echo $inputString . "<br><br>";

    echo "<h2>Huruf Kapital:</h2>";
    echo $uppercaseString . "<br><br>";

    echo "<h2>Huruf Kecil:</h2>";
    echo $lowercaseString . "<br><br>";

    echo "<h2>Potongan String:</h2>";
    echo $cutString . "<br><br>";
    ?>
</body>
</html>
