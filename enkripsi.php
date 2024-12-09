<?php
function enkripsi($input) {
    $output = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $output .= chr(ord($input[$i]) + 1);
    }
    return $output;
}

// Contoh penggunaan
$input = "DFHKNQ";
echo "Hasil enkripsi: " . enkripsi($input);
?>
