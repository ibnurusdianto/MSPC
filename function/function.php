<?php
/**
 * function untuk kalkulator
 */
function kalkulator(){
    echo "========== WELCOME TO KALKULATOR SEDERHANA ==========" . PHP_EOL;
    echo "Masukan angka awal : ";
    $angka1 = trim(fgets(STDIN));
    echo "Masukan angka kedua : ";
    $angka2 = trim(fgets(STDIN));
    echo "Masukan operasi ( + / - / ** (pangkat) / * / % : ";
    $operator = trim(fgets(STDIN));

    if (!is_numeric($angka1 AND $angka2)){
        echo "Masukan tipe data number atau angka!" . PHP_EOL;
    }

    if ($operator == '+') {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == '-') {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == '*') {
        $hasil = $angka1 * $angka2;
    } elseif ($operator == '/') {
        $hasil = $angka1 / $angka2;
    } elseif ($operator == '**'){
        $hasil = $angka1 ** $angka2;
    } else {
        echo "Tidak ada dalam Operasi Kalkulator" . PHP_EOL;
    }

    echo "Hasil Kalkulator : " . $hasil;
}

function pengecekanAngkaGanjilGenap(){
    echo "========== WELCOME TO GANJIL GENAP (CEK JENIS NUMBER) ==========" . PHP_EOL;
    echo "Masukan angka : ";
    $angka = trim(fgets(STDIN));
    if (!is_numeric($angka)){
        echo "Tipe data yang anda masukin bukan tipe data number!";
    }
    if ($angka % 2 == 0){
        echo "Angka yang anda masukin adalah $angka, angka tersebut termasuk bilangan Genap";
    }else {
        echo "Angka yang anda masukin adalah $angka, angka tersebut bukan bilangan Genap melainkan Bilangan Ganjil";
    }
}

function nestedLooping(){
    echo "========== WELCOME TO NESTED LOOPING ==========" . PHP_EOL;

    echo "Masukkan angka: ";
    $angka = trim(fgets(STDIN));
    if (!is_numeric($angka)){
        echo "Tipe data yang anda masukin bukan tipe data number!";
        exit;
    }

    echo "Pilih jenis output (bintang/number): ";
    $jenis = trim(fgets(STDIN));
    if (!is_string($jenis)){
        echo "Tipe data yang anda masukin bukan tipe data string!";
        exit;
    }

    echo "Mau Mulai dari angka berapa (0/1) : ";
    $mulai = trim(fgets(STDIN));
    if ($mulai != 0 && $mulai != 1) {
        echo "Angka mulai only harus 0 atau 1";
        exit;
    }
    if (!is_numeric($mulai)){
        echo "Tipe data yang anda masukin bukan tipe data number!";
        exit;
    }

    if ($jenis == 'bintang') {
        for ($i = $mulai; $i <= $angka; $i++) {
            for ($j = $mulai; $j <= $i; $j++) {
                echo "*";
            }
            echo "\n";
        }
    } elseif ($jenis == 'number') {
        for ($i = $mulai; $i <= $angka; $i++) {
            for ($j = $mulai; $j <= $i; $j++) {
                echo $j;
            }
            echo "\n";
        }
    } else {
        echo "Jenis output tidak valid";
        exit;
    }
}

function tahunKabisat(){
    echo "========== WELCOME TO CEK TAHUN KABISAT ==========" . PHP_EOL;
    echo "Masukan tahun : ";
    $tahun = trim(fgets(STDIN));
    if (!is_numeric($tahun)){
        echo "Anda memasukan tahun bukan tipe data number!";
        exit;
    }
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        echo "$tahun adalah tahun kabisat.";
    } else {
        echo "$tahun bukan tahun kabisat.";
    }
}

function LuasBangunDatar(){
    echo "========== WELCOME TO LUAS BANGUN DATAR ==========" . PHP_EOL;
    echo "1. Persegi Panjang            2. Persegi" . PHP_EOL;
    echo "3. Jajar Genjang              4. Belah Ketupat" . PHP_EOL;
    echo "5. Layang Layang              6. Segitiga" . PHP_EOL;
    echo "7. Trapesium                  8. Lingkaran \n" . PHP_EOL;
    echo "Silahkan masukan pilihan : ";
    $pilhan_bangun_datar = trim(fgets(STDIN));
    if (!is_numeric($pilhan_bangun_datar)){
        echo "Masukan berupa angka, bukan string!";
        exit;
    }
    if ($pilhan_bangun_datar == 1){
        echo "========== PERSEGI PANJANG ==========" . PHP_EOL;
        echo "Masukan panjang : ";
        $panjang = trim(fgets(STDIN));
        if (!is_numeric($panjang)){
            echo "Masukan panjang berupa number!";
            exit;
        }
        echo "Masukan Lebar : ";
        $lebar = trim(fgets(STDIN));
        if (!is_numeric($lebar)){
            echo "Masukan lebar berupa number!";
            exit;
        }
        $hasil_luas = $panjang * $lebar;
        echo "Hasil Luas adalah $hasil_luas" . PHP_EOL;
    } elseif ($pilhan_bangun_datar == 2){
        echo "========== PERSEGI ==========" . PHP_EOL;
        echo "Masukkan sisi: ";
        $sisi = trim(fgets(STDIN));
        if (!is_numeric($sisi)){
            echo "Masukan sisi dengan tipe data number";
        }
        $luas = pow($sisi, 2);
        echo "Luas persegi adalah : $luas";
    }elseif ($pilhan_bangun_datar == 3){
        echo "========== JAJAR GENJANG ==========" . PHP_EOL;
        echo "Masukkan alas: ";
        $alas = trim(fgets(STDIN));
        if (!is_numeric($alas)){
            echo "Masukan alas bertipe number";
            exit;
        }
        echo "Masukkan tinggi: ";
        $tinggi = trim(fgets(STDIN));
        if (!is_numeric($tinggi)){
            echo "Masukan tinggi bertipe number";
            exit;
        }
        $luas = $alas * $tinggi;
        echo "Luas jajar genjang : $luas";
    }elseif ($pilhan_bangun_datar == 4){
        echo "========== BELAH KETUPAT ==========" . PHP_EOL;
        echo "Masukkan diagonal 1: ";
        $diagonal1 = trim(fgets(STDIN));
        if (!is_numeric($diagonal1)){
            echo "Masukan diagonal ke 1 bertipe number";
            exit;
        }
        echo "Masukkan diagonal 2: ";
        $diagonal2 = trim(fgets(STDIN));
        if (!is_numeric($diagonal2)){
            echo "Masukan diagonal ke 2 bertipe number";
            exit;
        }
        $luas = ($diagonal1 * $diagonal2) / 2;
        echo "Luas belah ketupat : $luas";
    }elseif ($pilhan_bangun_datar == 5){
        echo "========== LAYANG LAYANG ==========" . PHP_EOL;
        echo "Masukkan diagonal 1: ";
        $diagonal1 = trim(fgets(STDIN));
        if (!is_numeric($diagonal1)){
            echo "Masukan diagonal ke 1 bertipe number";
            exit;
        }
        echo "Masukkan diagonal 2: ";
        $diagonal2 = trim(fgets(STDIN));
        if (!is_numeric($diagonal2)){
            echo "Masukan diagonal ke 2 bertipe number";
            exit;
        }
        $luas = ($diagonal1 * $diagonal2) / 2;
        echo "Luas layang-layang : $luas";
    }elseif ($pilhan_bangun_datar == 6){
        echo "========== SEGITIGA ==========" . PHP_EOL;
        echo "Masukkan alas: ";
        $alas = trim(fgets(STDIN));
        if (!is_numeric($alas)){
            echo "Alas harus bertipe number!";
            exit;
        }
        echo "Masukkan tinggi: ";
        $tinggi = trim(fgets(STDIN));
        if (!is_numeric($tinggi)){
            echo "Tinggi harus bertipe number!";
            exit;
        }
        $luas = ($alas * $tinggi) / 2;
        echo "Luas segitiga : $luas";
    }elseif ($pilhan_bangun_datar == 7){
        echo "========== TRAPESIUM ==========" . PHP_EOL;
        echo "Masukkan sisi atas: ";
        $sisi_atas = trim(fgets(STDIN));
        if (!is_numeric($sisi_atas)){
            echo "Sisi atas harus bertipe number!";
            exit;
        }
        echo "Masukkan sisi bawah: ";
        $sisi_bawah = trim(fgets(STDIN));
        if (!is_numeric($sisi_bawah)){
            echo "Sisi bawah harus bertipe number!";
            exit;
        }
        echo "Masukkan tinggi: ";
        $tinggi = trim(fgets(STDIN));
        if (!is_numeric($tinggi)){
            echo "Tinggi harus bertipe number!";
            exit;
        }
        $luas = (($sisi_atas + $sisi_bawah) * $tinggi) / 2;
        echo "Luas trapesium : $luas";
    }elseif ($pilhan_bangun_datar == 8){
        echo "========== LUAS LINGKARAN =========" . PHP_EOL;
        echo "Masukkan jari-jari: ";
        $jari_jari = trim(fgets(STDIN));
        if (!is_numeric($jari_jari)){
            echo "Jari jari harus bertipe number!";
            exit;
        }
        $luas = pi() * pow($jari_jari, 2);
        echo "Luas lingkaran: " . $luas;
    }else{
        echo "Bangun datar tidak terdaftar di list!";
        exit;
    }
}

function RataRataNilaiSiswa(){
    function RataRataNilaiSiswa(){
        echo "Masukan nama file (csv/xlsx) - File harus dalam satu folder! : ";
        $file = trim(fgets(STDIN));

        if (pathinfo($file, PATHINFO_EXTENSION) == 'csv') {
            $file = fopen($file, 'r');
            $total_nilai = 0;
            $jumlah_siswa = 0;
            while (($data = fgetcsv($file)) !== FALSE) {
                $total_nilai += $data[1];
                $jumlah_siswa++;
            }
            fclose($file);
            $rata_rata = $total_nilai / $jumlah_siswa;
            echo "Rata-rata nilai siswa: " . $rata_rata;
        } elseif (pathinfo($file, PATHINFO_EXTENSION) == 'xlsx') {
            require 'vendor/autoload.php';
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load($file);
            $worksheet = $spreadsheet->getActiveSheet();
            $total_nilai = 0;
            $jumlah_siswa = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);
                $data = [];
                foreach ($cellIterator as $cell) {
                    $data[] = $cell->getValue();
                }
                $total_nilai += $data[1];
                $jumlah_siswa++;
            }
            $rata_rata = $total_nilai / $jumlah_siswa;
            echo "Rata-rata nilai siswa: " . $rata_rata;
        } else {
            echo "Format file tidak valid";
            exit;
        }
    }
}

function VolumeBangunRuang(){
    echo "========== WELCOME TO VOLUME BANGUN RUANG ==========" . PHP_EOL;
    echo "1. Balok              2. Kubus" . PHP_EOL;
    echo "3. Tabung             4. Bola" . PHP_EOL;
    echo "5. Kerucut \n" . PHP_EOL;

    echo "Silahkan pilih mau menghitung volume bangun ruang mana ? : ";
    $pilihan_volume_ruang = trim(fgets(STDIN));
    if (!is_numeric($pilihan_volume_ruang)){
        echo "Masukan berupa number, jangan tipe data lainnya!";
        exit;
    }
    if ($pilihan_volume_ruang == 1){
        echo "========== BALOK ==========" . PHP_EOL;
        echo "Masukkan panjang balok: ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar balok: ";
        $lebar = trim(fgets(STDIN));
        echo "Masukkan tinggi balok: ";
        $tinggi = trim(fgets(STDIN));
        $volume = $panjang * $lebar * $tinggi;
        echo "Volume balok adalah: $volume";
    }elseif ($pilihan_volume_ruang == 2){
        echo "========== KUBUS ==========" . PHP_EOL;
        echo "Masukkan panjang sisi kubus: ";
        $sisi = trim(fgets(STDIN));
        $volume = $sisi * $sisi * $sisi;
        echo "Volume kubus adalah: " . $volume . "\n";
    }elseif ($pilihan_volume_ruang == 3){
        echo "========== TABUNG ==========" . PHP_EOL;
        echo "Masukkan jari-jari tabung: ";
        $r = trim(fgets(STDIN));
        echo "Masukkan tinggi tabung: ";
        $t = trim(fgets(STDIN));
        $volume = pi() * $r * $r * $t;
        echo "Volume tabung adalah: " . $volume . "\n";
    }elseif ($pilihan_volume_ruang == 4){
        echo "========== BOLA ==========" . PHP_EOL;
        echo "Masukkan jari-jari bola: ";
        $r = trim(fgets(STDIN));
        $volume = 4 / 3 * pi() * $r * $r * $r;
        echo "Volume bola adalah: " . $volume . "\n";
    }elseif ($pilihan_volume_ruang == 5){
        echo "========== KERUCUT ==========" . PHP_EOL;
        echo "Masukkan jari-jari kerucut: ";
        $r = trim(fgets(STDIN));
        echo "Masukkan tinggi kerucut: ";
        $t = trim(fgets(STDIN));
        $volume = 1 / 3 * pi() * $r * $r * $t;
        echo "Volume kerucut adalah: " . $volume . "\n";
    }
}

function NilaiBMI(){
    echo "=========== WELCOME TO BMI ==========" . PHP_EOL;

    echo "Masukan nama anda : ";
    $nama_anda = trim(fgets(STDIN));
    if (!is_string($nama_anda)){
        echo "Harap input menggunakan string!";
        exit;
    }

    echo "Masukkan jenis kelamin (Laki-laki/Perempuan) : ";
    $jenis_kelamin = trim(fgets(STDIN));
    if (!is_string($jenis_kelamin)){
        echo "Harap input menggunakan string!";
        exit;
    }

    echo "Masukkan berat badan dalam kilogram (tidak pake kg!) : ";
    $berat_badan = trim(fgets(STDIN));
    if (!is_numeric($berat_badan)){
        echo "Harap input menggunakan number!";
        exit;
    }

    echo "Masukkan tinggi badan dalam meter (tidak pake m!) : ";
    $tinggi_badan = trim(fgets(STDIN));
    if (!is_numeric($tinggi_badan)){
        echo "Harap input menggunakan number!";
        exit;
    }

    $bmi = $berat_badan / ($tinggi_badan * $tinggi_badan);

    echo "Halo $nama_anda" . PHP_EOL;
    echo "Jenis Kelamin $jenis_kelamin" . PHP_EOL;
    echo "BMI Anda adalah: $bmi" . PHP_EOL;

    if ($jenis_kelamin == 'Laki-laki') {
        if ($bmi < 18.5) {
            echo "Anda berada dalam kategori berat badan kurang.\n";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            echo "Anda berada dalam kategori berat badan ideal.\n";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            echo "Anda berada dalam kategori berat badan berlebih.\n";
        } else {
            echo "Anda berada dalam kategori obesitas.\n";
        }
    } else {
        if ($bmi < 17.5) {
            echo "Anda berada dalam kategori berat badan kurang.\n";
        } elseif ($bmi >= 17.5 && $bmi <= 22.9) {
            echo "Anda berada dalam kategori berat badan ideal.\n";
        } elseif ($bmi >= 23 && $bmi <= 27.4) {
            echo "Anda berada dalam kategori berat badan berlebih.\n";
        } else {
            echo "Anda berada dalam kategori obesitas.\n";
        }
    }

}