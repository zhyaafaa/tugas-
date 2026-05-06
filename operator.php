<?php
$a = 15;
$b = 4;

echo "<h3>Operasi Aritmatika Dasar</h3>";

// Penjumlahan
echo "Penjumlahan ($a + $b) = " . ($a + $b) . "<br>";

// Pengurangan
echo "Pengurangan ($a - $b) = " . ($a - $b) . "<br>";

// Perkalian
echo "Perkalian ($a * $b) = " . ($a * $b) . "<br>";

// Pembagian
echo "Pembagian ($a / $b) = " . ($a / $b) . "<br>";

// Modulus (Sisa Hasil Bagi)
// Sangat berguna untuk cek angka genap/ganjil
echo "Modulus ($a % $b) = " . ($a % $b) . "<br>";

// Perpangkatan (Tersedia di PHP 5.6 ke atas)
echo "Perpangkatan ($a ** $b) = " . ($a ** $b) . "<br>";

echo "<hr>";

// Increment & Decrement (Sering digunakan dalam perulangan/looping)
$x = 10;
echo "Nilai awal x = $x <br>";
$x++; 
echo "Setelah Increment (x++): $x <br>";

$y = 10;
$y--;
echo "Setelah Decrement (y--): $y";

// 1. Dasar (Assignment)
$skor = 100;
echo "Skor awal: $skor <br>";

// 2. Tambah dan Isi (+=)
// Sama dengan: $skor = $skor + 50
$skor += 50; 
echo "Setelah ditambah 50: $skor <br>";

// 3. Kurang dan Isi (-=)
// Sama dengan: $skor = $skor - 20
$skor -= 20;
echo "Setelah dikurangi 20: $skor <br>";

// 4. Kali dan Isi (*=)
// Sama dengan: $skor = $skor * 2
$skor *= 2;
echo "Setelah dikali 2: $skor <br>";

// 5. Bagi dan Isi (/=)
// Sama dengan: $skor = $skor / 4
$skor /= 4;
echo "Setelah dibagi 4: $skor <br>";

// 6. Modulus dan Isi (%=)
// Mencari sisa bagi lalu dimasukkan kembali ke variabel
$skor %= 10;
echo "Sisa bagi dengan 10: $skor <br>";

// 7. Penggabungan String (.=)
// Sangat berguna untuk menyambung teks
$nama = "hia";
$nama .= "zajrotuw wahidah";
echo "Nama lengkap: $nama <br>";
$a = 10;
$b = 5;

// Sama dengan
var_dump($a == $b); // false

// Identik (nilai dan tipe harus sama)
var_dump($a === $b); // false

// Tidak sama
var_dump($a != $b); // true

// Tidak identik
var_dump($a !== $b); // true

// Lebih besar
var_dump($a > $b); // true

// Lebih kecil
var_dump($a < $b); // false

// Lebih besar atau sama dengan
var_dump($a >= $b); // true

// Lebih kecil atau sama dengan
var_dump($a <= $b); // false
$a = 5;

// Pre Increment
echo "Pre Increment (++a): ";
echo ++$a; // hasil: 6
echo "<br>";

// Reset nilai
$a = 5;

// Post Increment
echo "Post Increment (a++): ";
echo $a++; // hasil: 5
echo "<br>";
echo "Nilai setelah increment: $a"; // hasil: 6
echo "<br><br>";

// Reset nilai
$a = 5;

// Pre Decrement
echo "Pre Decrement (--a): ";
echo --$a; // hasil: 4
echo "<br>";

// Reset nilai
$a = 5;

// Post Decrement
echo "Post Decrement (a--): ";
echo $a--; // hasil: 5
echo "<br>";
echo "Nilai setelah decrement: $a"; // hasil: 4
$a = true;
$b = false;

// AND
echo "a && b = ";
var_dump($a && $b); // false
echo "<br>";

// OR
echo "a || b = ";
var_dump($a || $b); // true
echo "<br>";

// NOT
echo "!a = ";
var_dump(!$a); // false
echo "<br><br>";

// Contoh dalam kondisi
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 80) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>