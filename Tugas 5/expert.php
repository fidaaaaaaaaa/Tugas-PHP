<?php
$siswa = array(
    array(
        "NIS" => "001",
        "Nama" => "Raihan Nauval",
        "Alamat" => "Bandung",
        "No_Telp" => "08123456789",
        "Jenis_Kelamin" => "Laki-laki"
    ),
    array(
        "NIS" => "002",
        "Nama" => "Dina Amalia",
        "Alamat" => "Jakarta",
        "No_Telp" => "08211234567",
        "Jenis_Kelamin" => "Perempuan"
    )
);

foreach($siswa as $data) {
    echo "NIS: " . $data["NIS"] . "<br>";
    echo "Nama: " . $data["Nama"] . "<br>";
    echo "Alamat: " . $data["Alamat"] . "<br>";
    echo "No Telp/WA: " . $data["No_Telp"] . "<br>";
    echo "Jenis Kelamin: " . $data["Jenis_Kelamin"] . "<br><br>";
}
?>