<<?php
/* Komentar:
  1. buat pengulangan 1-50
  2. jika habis dibagi 3 -> "ipin"
  3. jika habis dibagi 5 -> "upin"
  4. jika habis dibagi 3 dan 5 -> "upin dan ipin selamanya"
*/

$i = 1; 

while ($i <= 50) { 
    
    // Syarat 4: Cek pembagi 3 DAN 5 dulu (Modulo 15)
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "upin dan ipin selamanya <br>";
    } 
    // Syarat 2: Cek pembagi 3
    elseif ($i % 3 == 0) {
        echo "ipin <br>";
    } 
    // Syarat 3: Cek pembagi 5
    elseif ($i % 5 == 0) {
        echo "upin <br>";
    } 
    // Jika tidak ada yang cocok, cetak angka asli
    else {
        echo $i . "<br>";
    }

    $i++; 
}
?>