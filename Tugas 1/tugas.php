<?php

//Beginner
// Output CSS langsung dari PHP
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
    }

    .biodata {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .biodata h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #007BFF;
    }

    .biodata p {
        margin: 10px 0;
        font-size: 16px;
    }

    .label {
        font-weight: bold;
        color: #555;
    }
</style>";

// Variabel data
$nama_depan = "Raihan Nauval";
$nama_belakang = "Pratama";
$x = 10;
$z = 6;

// Output HTML ke PHP
echo "<div class='biodata'>";
echo "<h2>Data Diri</h2>";
echo "<p><span class='label'>Nama Lengkap:</span> $nama_depan $nama_belakang</p>";
echo "<p><span class='label'>Umur:</span> " . ($x + $z) . " tahun</p>";
echo "<p><span class='label'>Alamat Rumah:</span> Rancamanyar, Leuwidulang</p>";
echo "<p><span class='label'>Jenis Kelamin:</span> Laki-laki</p>";
echo "<p><span class='label'>No. Tlp:</span> +62 821-1845-9806</p>";
echo "</div>";

echo"<br>";

// Intermediete
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
    }

    .biodata {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .biodata h2 {
        text-align: center;
        margin-bottom: 20px;
        color: blueviolet;
    }

    .biodata p {
        margin: 10px 0;
        font-size: 16px;
    }

    .label {
        font-weight: bold;
        color: #555;
    }
</style>";

// Variabel data
$nama_depan = "Raihan Nauval";
$nama_belakang = "Pratama";
$x = 10;
$z = 6;

// Output HTML ke PHP
echo "<div class='biodata'>";
echo "<h2>Data Diri</h2>";
echo "<p><span class='label'>Nama Lengkap:</span> $nama_depan $nama_belakang</p>";
echo "<p><span class='label'>Umur:</span> " . ($x + $z) . " tahun</p>";
echo "</div>";

echo"<br>";

// Expert
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
    }

    .biodata {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .biodata h2 {
        text-align: center;
        margin-bottom: 20px;
        color: blueviolet;
    }

    .biodata p {
        margin: 10px 0;
        font-size: 16px;
    }

    .label {
        font-weight: bold;
        color: #555;
    }
</style>";

// Variabel data
$nama_lengkap = "Raihan Nauval Pratama";
$umur = 16;
$alamat = "Rancamanyar, Leuwidulang";
$no_hp = "+62 821-1845-9806";

// Menjumlahkan karakter nama
$jumlah_karakter = strlen($nama_lengkap);

// Menjumlahkan no. tlp
$angka_hp = preg_replace("/[^0-9]/", "", $no_hp); // buang + dan -
$angka_array = str_split($angka_hp);

$nilai = 0;
foreach ($angka_array as $angka) {
    $nilai += (int)$angka;
}

// Cek kondisi logika
$cek1 = $nilai < 30 && $nilai % 2 == 1;
$cek2 = $nilai > 30 || $nilai % 2 == 2;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Identitas dan Logika PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 30px;
        }

        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: blueviolet;
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            font-size: 16px;
            line-height: 1.8;
        }

        .debug {
            margin-top: 20px;
            background: #eee;
            padding: 15px;
            border-radius: 8px;
            font-family: monospace;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Diri & Hasil Perhitungan</h2>
    <div class="info">
        <p><span class="label">Nama Lengkap:</span> <?= $nama_lengkap ?></p>
        <p><span class="label">Umur:</span> <?= $umur ?> tahun</p>
        <p><span class="label">Alamat Rumah:</span> <?= $alamat ?></p>
        <p><span class="label">No. Tlp:</span> <?= $no_hp ?></p>
        <p><span class="label">Jumlah Karakter Nama:</span> <?= $jumlah_karakter ?></p>
        <p><span class="label">Jumlah Total Angka di No. Tlp:</span> <?= $nilai ?></p>
    </div>

    <div class="debug">
        <p><span class="label">var_dump jumlah karakter nama:</span><br>
        <?php var_dump($jumlah_karakter); ?></p>

        <p><span class="label">Cek: $nilai &lt; 30 && $nilai % 2 == 1:</span><br>
        <?php var_dump($cek1); ?></p>

        <p><span class="label">Cek: $nilai &gt; 30 || $nilai % 2 == 2:</span><br>
        <?php var_dump($cek2); ?></p>
    </div>
</div>

</body>
</html>