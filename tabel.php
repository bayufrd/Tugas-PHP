<?php
function tampilkanTabelHardCode() {
    echo "<table border='1' cellspacing='0' cellpadding='5' style='text-align: center;'>";
    for ($i = 1; $i <= 64; $i++) {
        if ($i % 8 == 1) echo "<tr>";
        
        // Kondisi untuk sel berwarna hitam
        $warnaHitam = [1,2,5,7,10,11,13,14,17,19,22,23,25,26,29,31,34,35,37,38,41,43,46,47,49,50,53,55,58,59,61,62];
        $warna = in_array($i, $warnaHitam) ? 'style="background-color: black; color: white;"' : '';
        echo "<td $warna>$i</td>";
        
        if ($i % 8 == 0) echo "</tr>";
    }
    echo "</table>";
}

// Panggil fungsi
tampilkanTabelHardCode();
// Fungsi untuk menampilkan tabel dengan warna yang dapat dipilih oleh pengguna
function tampilkanTabel($warnaHitam) {
    echo "<table border='1' cellspacing='0' cellpadding='5' style='text-align: center;'>";
    for ($i = 1; $i <= 64; $i++) {
        if ($i % 8 == 1) echo "<tr>";
        
        // Menambahkan kondisi untuk warna hitam berdasarkan input pengguna
        $warna = in_array($i, $warnaHitam) ? 'style="background-color: black; color: white;"' : '';
        echo "<td $warna>$i</td>";
        
        if ($i % 8 == 0) echo "</tr>";
    }
    echo "</table>";
}

// Proses jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari pengguna, misalnya angka yang dipilih untuk warna hitam
    $inputWarna = $_POST['warna_hitam'];
    // Ubah input string menjadi array (pisahkan dengan koma)
    $warnaHitam = array_map('intval', explode(",", $inputWarna));

    // Panggil fungsi untuk menampilkan tabel dengan warna yang ditentukan
    tampilkanTabel($warnaHitam);
} else {
    // Jika tidak ada input, tampilkan tabel dengan warna default
    tampilkanTabel([]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Warna Hitam</title>
</head>
<body>

<h2>Masukkan Angka yang Ingin Diberi Warna Hitam</h2>

<!-- Formulir untuk input angka -->
<form method="POST" action="">
    <label for="warna_hitam">Masukkan angka yang ingin dihitamkan (pisahkan dengan koma, misalnya 1,5,10):</label><br>
    <input type="text" id="warna_hitam" name="warna_hitam" required><br><br>
    <input type="submit" value="Tampilkan Tabel">
</form>

</body>
</html>
