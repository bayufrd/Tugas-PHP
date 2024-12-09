<?php
function tampilkanTabel() {
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
tampilkanTabel();
?>
