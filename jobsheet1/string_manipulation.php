<?php
$inputString = "Selamat belajar PHP!";

// Mengubah string menjadi huruf kapital
$uppercaseString = strtoupper($inputString);

// Mengubah string menjadi huruf kecil
$lowercaseString = strtolower($inputString);

// Memotong string
$cutString = substr($inputString, 8); // Memotong string mulai dari indeks 8

echo "<h2>String Asli:</h2>";
echo $inputString . "<br><br>";

echo "<h2>Huruf Kapital:</h2>";
echo $uppercaseString . "<br><br>";

echo "<h2>Huruf Kecil:</h2>";
echo $lowercaseString . "<br><br>";

echo "<h2>Potongan String:</h2>";
echo $cutString . "<br><br>";
