<?php
// Fungsi untuk menghitung n-gram
function ngram($text, $n) {
    $words = explode(" ", strtolower($text));
    $result = [];
    for ($i = 0; $i <= count($words) - $n; $i++) {
        $result[] = implode(" ", array_slice($words, $i, $n));
    }
    return $result;
}

// Proses jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari pengguna
    $input_text = $_POST['input_text'];

    // Hitung n-gram untuk unigram, bigram, dan trigram
    $unigram = ngram($input_text, 1);
    $bigram = ngram($input_text, 2);
    $trigram = ngram($input_text, 3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung N-Gram</title>
</head>
<body>

<h2>Masukkan Teks untuk Menghitung N-Gram</h2>

<!-- Formulir untuk input teks -->
<form method="POST" action="">
    <label for="input_text">Teks yang ingin dihitung n-gram:</label><br>
    <input type="text" id="input_text" name="input_text" required><br><br>
    <input type="submit" value="Hitung N-Gram">
</form>

<?php
// Jika formulir disubmit, tampilkan hasil n-gram
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Hasil N-Gram untuk Teks: '$input_text'</h3>";
    
    // Unigram
    echo "<strong>Unigram:</strong> " . implode(", ", $unigram) . "<br>";

    // Bigram
    echo "<strong>Bigram:</strong> " . implode(", ", $bigram) . "<br>";

    // Trigram
    echo "<strong>Trigram:</strong> " . implode(", ", $trigram) . "<br>";
}
?>

</body>
</html>
