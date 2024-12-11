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

// Proses jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari pengguna
    $input = $_POST['input_text'];

    // Enkripsi input dan tampilkan hasilnya
    $hitunganHurufKecil = hitungHurufKecil($input);
    echo "Hasil enkripsi: " . $hitunganHurufKecil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Teks Kecil</title>
</head>
<body>

<h2>Masukkan Teks untuk diHitung huruf Kecil</h2>

<!-- Formulir untuk input teks -->
<form method="POST" action="">
    <label for="input_text">Teks yang ingin dienkripsi:</label><br>
    <input type="text" id="input_text" name="input_text" required><br><br>
    <input type="submit" value="Hitung">
</form>

</body>
</html>
