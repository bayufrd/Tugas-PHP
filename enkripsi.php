<?php

// Contoh penggunaan
$input = "DFHKNQ";
echo "Hasil enkripsi: " . enkripsi($input);
// ?>
// <?php
function enkripsi($input) {
    $output = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $output .= chr(ord($input[$i]) + 1);
    }
    return $output;
}

// Proses jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari pengguna
    $input = $_POST['input_text'];

    // Enkripsi input dan tampilkan hasilnya
    $encrypted_text = enkripsi($input);
    echo "Hasil enkripsi: " . $encrypted_text;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi Teks</title>
</head>
<body>

<h2>Masukkan Teks untuk Enkripsi</h2>

<!-- Formulir untuk input teks -->
<form method="POST" action="">
    <label for="input_text">Teks yang ingin dienkripsi:</label><br>
    <input type="text" id="input_text" name="input_text" required><br><br>
    <input type="submit" value="Enkripsi">
</form>

</body>
</html>
