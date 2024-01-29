<?php

$urutanPendaftaranEko = 120;
$kategoriMataLombaEko = "Web App";
$tingkatPendidikanEko = "SMA";
$tahunPelaksanaan = substr(date("Y"), -2);
$kode = "";
$pendidikan = "";


if ($kategoriMataLombaEko == "Web App") {
    $kode = "01W";
} elseif ($kategoriMataLombaEko == "Android") {
    $kode = "02A";
} else {
    $kode = "03G";
}


if ($tingkatPendidikanEko == "SMA") {
    $pendidikan = "A";
} else {
    $pendidikan = "P";
}

$nomorPesertaEko = ($urutanPendaftaranEko + 1) . $kode . $pendidikan . $tahunPelaksanaan;

echo "Nomor peserta Eko: " . $nomorPesertaEko;

?>
