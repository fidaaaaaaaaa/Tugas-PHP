<?php
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", 
               "Juli", "Agustus", "September", "Oktober", "November");
$bulan12 = "Desember";
$bulan[] = $bulan12;

foreach($bulan as $b) {
    echo "$b <br>";
}
?>