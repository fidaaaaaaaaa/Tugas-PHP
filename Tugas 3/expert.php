<?php
function hitung($umur){
    $angka = str_split($umur);
    $jumlah = array_sum($angka);

    echo "Jumlah angka umur saya ($jumlah)";
}
    hitung(16);
?>