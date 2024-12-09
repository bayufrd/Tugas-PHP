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
?>
