<?php

function ubahFormatWaktu($waktu) {
    list($jam, $menit) = explode(':', $waktu);
    $amPm = ($jam >= 12) ? 'PM' : 'AM';
    $jam = ($jam > 12) ? $jam - 12 : $jam;
    $menit = str_pad($menit, 2, '0', STR_PAD_LEFT);
    return "$jam:$menit $amPm";
}


$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Hasil 1: $hasil1<br>";
echo "Hasil 2: $hasil2<br>";
echo "Hasil 3: $hasil3";
?>
