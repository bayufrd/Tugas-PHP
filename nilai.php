<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$arrayNilai = explode(" ", $nilai);

// (1) Nilai rata-rata
$rataRata = array_sum($arrayNilai) / count($arrayNilai);

// (2) 7 nilai tertinggi
rsort($arrayNilai);
$nilaiTertinggi = array_slice($arrayNilai, 0, 7);

// (3) 7 nilai terendah
sort($arrayNilai);
$nilaiTerendah = array_slice($arrayNilai, 0, 7);

echo "Rata-rata: $rataRata<br>";
echo "7 Nilai Tertinggi: " . implode(", ", $nilaiTertinggi) . "<br>";
echo "7 Nilai Terendah: " . implode(", ", $nilaiTerendah) . "<br>";
// Fungsi untuk menghitung rata-rata, nilai tertinggi, dan nilai terendah
function hitungNilai($nilai) {
    // Mengubah nilai string menjadi array
    $arrayNilai = explode(" ", $nilai);

    // (1) Nilai rata-rata
    $rataRata = array_sum($arrayNilai) / count($arrayNilai);

    // (2) 7 nilai tertinggi
    rsort($arrayNilai);
    $nilaiTertinggi = array_slice($arrayNilai, 0, 7);

    // (3) 7 nilai terendah
    sort($arrayNilai);
    $nilaiTerendah = array_slice($arrayNilai, 0, 7);

    return [
        'rataRata' => $rataRata,
        'nilaiTertinggi' => $nilaiTertinggi,
        'nilaiTerendah' => $nilaiTerendah
    ];
}
// Proses jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari pengguna
    $input_nilai = $_POST['nilai'];

    // Hitung rata-rata, nilai tertinggi, dan nilai terendah
    $hasil = hitungNilai($input_nilai);

    // Tampilkan hasilnya
    $rataRata = $hasil['rataRata'];
    $nilaiTertinggi = implode(", ", $hasil['nilaiTertinggi']);
    $nilaiTerendah = implode(", ", $hasil['nilaiTerendah']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Nilai</title>
</head>
<body>

<h2>Masukkan Nilai untuk Dihitung Rata-Rata dan Nilai Tertinggi/ Terendah</h2>

<!-- Formulir untuk input nilai -->
<form method="POST" action="">
    <label for="nilai">Masukkan Nilai (Pisahkan dengan spasi):</label><br>
    <input type="text" id="nilai" name="nilai" required><br><br>
    <input type="submit" value="Hitung Nilai">
</form>

<?php
// Jika formulir disubmit, tampilkan hasil perhitungan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Hasil Perhitungan untuk Nilai: '$input_nilai'</h3>";
    echo "Rata-rata: $rataRata<br>";
    echo "7 Nilai Tertinggi: $nilaiTertinggi<br>";
    echo "7 Nilai Terendah: $nilaiTerendah<br>";
}
?>

</body>
</html>
