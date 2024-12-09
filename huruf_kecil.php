<?php
function hitungHurufKecil($string) {
    $jumlah = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_lower($string[$i])) {
            $jumlah++;
        }
    }
    return "$string mengandung $jumlah buah huruf kecil.";
}

// Contoh penggunaan
echo hitungHurufKecil("TranSISI");
?>
