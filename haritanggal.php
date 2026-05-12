<?php
// 1. SET ZONA WAKTU (WITA)
date_default_timezone_set("Asia/Makassar");
// 2. URUTAN HARI 
$hari = date("N");
// 3. TANGGAL, BULAN, TAHUN
$tanggal = date("j");
$bulan = (int)date("n");
$tahun = date("Y");

// Switch Hari 
switch ($hari) {
    case 1: $namaHari = "Senin"; break;
    case 2: $namaHari = "Selasa"; break;
    case 3: $namaHari = "Rabu"; break;
    case 4: $namaHari = "Kamis"; break;
    case 5: $namaHari = "Jumat"; break;
    case 6: $namaHari = "Sabtu"; break;
    case 7: $namaHari = "Minggu"; break;
    default: $namaHari = "Hari tidak diketahui";
}

// Switch Bulan
switch ($bulan) {
    case 1: $namaBulan = "Januari"; break;
    case 2: $namaBulan = "Februari"; break;
    case 3: $namaBulan = "Maret"; break;
    case 4: $namaBulan = "April"; break;
    case 5: $namaBulan = "Mei"; break;
    case 6: $namaBulan = "Juni"; break;
    case 7: $namaBulan = "Juli"; break;
    case 8: $namaBulan = "Agustus"; break;
    case 9: $namaBulan = "September"; break;
    case 10: $namaBulan = "Oktober"; break;
    case 11: $namaBulan = "November"; break;
    case 12: $namaBulan = "Desember"; break;
}

echo "Hari ini $namaHari, $tanggal $namaBulan $tahun";
?>