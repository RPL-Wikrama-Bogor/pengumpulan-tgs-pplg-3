<?php
$sekarang = "15:00";
$waktu = explode(':', $sekarang);
$jam = $waktu[0];
$menit = $waktu[1];

if (($jam == 7 && $menit >= 0) || ($jam == 11 && $menit < 30)) {
    echo "Saat ini merupakan waktu kerja.";
} elseif (($jam == 11 && $menit >= 30) || ($jam == 12 && $menit < 15)) {
    echo "Saat ini merupakan waktu istirahat";
} elseif (($jam == 12 && $menit >= 15) || ($jam == 12 && $menit < 15) || ($jam > 12 && $jam < 16)) {
    echo "Saat ini merupakan Waktu kerja";
} else {
    echo "Saat ini bukan waktu kerja.";
}
