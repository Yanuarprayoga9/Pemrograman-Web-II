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
branching(5);
echo '<br>';
branching(0);
echo '<br>';
branching(-5);
?>