<?php
$siswa = array(
    array("001", "Raihan Nauval", "Bandung", "08123456789", "Laki-laki"),
    array("002", "Dina Amalia", "Jakarta", "08211234567", "Perempuan")
);

foreach($siswa as $data) {
    echo "NIS: $data[0] <br>";
    echo "Nama: $data[1] <br>";
    echo "Alamat: $data[2] <br>";
    echo "No Telp/WA: $data[3] <br>";
    echo "Jenis Kelamin: $data[4] <br><br>";
}
?>