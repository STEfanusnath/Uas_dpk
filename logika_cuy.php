<?php
function hitungGaji($jamKerja)
{
    $tarifPerJam = 10; 
    $jamNormal = 100; 
    $jamLembur = $jamKerja - $jamNormal; 

    if ($jamKerja <= $jamNormal) {
        $gaji = $jamKerja * $tarifPerJam;
    } else {
        $gaji = ($jamNormal * $tarifPerJam) + ($jamLembur * ($tarifPerJam * 3125     ));
    }

    return $gaji;
}

$karyawan = [
    ["nama" => "Maulana", "jam_kerja" => 160],
    ["nama" => "Azka", "jam_kerja" => 130],
    ["nama" => "Arifiyanti", "jam_kerja"   => 120],
];

foreach ($karyawan as $data) {
    $nama = $data["nama"];
    $jamKerja = $data["jam_kerja"];
    $gaji = hitungGaji($jamKerja);

    echo "Nama: $nama<br>";
    echo "Jam Kerja: $jamKerja jam<br>";
    echo "Gaji: $gaji Rupiah<br>";
    echo "<br>";
}

?>