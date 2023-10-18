<?php
/**
 * Bagian utama atau tampilan awal
 */

require_once "function/function.php";

echo "========== MENU V.1 ==========" . PHP_EOL;
echo "1. Program Kalkulator                      2. Hitung Tahun Kabisat" . PHP_EOL;
echo "3. Bilangan Ganjil dan Genap               4. Generate Random NIK (Premium)" . PHP_EOL;
echo "4. Menyelesaikan Kasus Nested looping      5. Menghitung Berbagai Luas Bangun Datar" . PHP_EOL;
echo "6. Menghitung Volume Bangun Ruang          7. Menghitung Nilai BMI" . PHP_EOL;
echo "8. Nilai Rata Rata Siswa (.csv, .xlsx)     9. About Me (coming soon)" . PHP_EOL;


echo "Masukan angka menu pilihan anda : ";
$pilihan = trim(fgets(STDIN));
switch ($pilihan) {
    case 1:
        kalkulator();
        break;
    case 2:
        tahunKabisat();
        break;
    case 3:
        pengecekanAngkaGanjilGenap();
        break;
    case 4:
        nestedLooping();
        break;
    case 5:
        LuasBangunDatar();
        break;
    case 6:
        VolumeBangunRuang();
        break;
    case 7:
        NilaiBMI();
        break;
    case 8:
        RataRataNilaiSiswa();
        break;
    default:
        echo "Pilihan tidak valid.";
        break;
}


