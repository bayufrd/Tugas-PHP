<?php
function ngram($text, $n) {
    $words = explode(" ", strtolower($text));
    $result = [];
    for ($i = 0; $i <= count($words) - $n; $i++) {
        $result[] = implode(" ", array_slice($words, $i, $n));
    }
    return $result;
}

// Contoh penggunaan
$text = "Jakarta adalah ibukota negara Republik Indonesia";

// Unigram
echo "Unigram: " . implode(", ", ngram($text, 1)) . "<br>";

// Bigram
echo "Bigram: " . implode(", ", ngram($text, 2)) . "<br>";

// Trigram
echo "Trigram: " . implode(", ", ngram($text, 3)) . "<br>";
?>
