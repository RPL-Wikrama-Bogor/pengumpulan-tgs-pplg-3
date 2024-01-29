<?php

$usiaAndi = 16;
$tahunSekarang = date('Y');
$tahunAndi = $tahunSekarang - $usiaAndi;
$tahunDani = $tahunAndi;
$tahunBeni = $tahunAndi - 3;
$tahunEko = $tahunBeni + 5;


function isTahunKabisat($tahun)
{
    return (($tahun % 4 == 0) && ($tahun % 100 != 0)) || ($tahun % 400 == 0);
}


echo "Tahun kelahiran Andi: $tahunAndi";
echo "<br>";
echo "Tahun kelahiran Dani: $tahunDani";
echo "<br>";
echo "Tahun kelahiran Beni: $tahunBeni";
echo "<br>";
echo "Tahun kelahiran Eko: $tahunEko";
echo "<br>";

echo "<br>";

if (isTahunKabisat($tahunAndi)) {
    echo "Andi lahir di tahun kabisat.";
} else {
    echo "Andi tidak lahir di tahun kabisat.";
}

echo "<br>";

if (isTahunKabisat($tahunBeni)) {
    echo "Beni lahir di tahun kabisat.";
} else {
    echo "Beni tidak lahir di tahun kabisat.";
}

echo "<br>";

if (isTahunKabisat($tahunEko)) {
    echo "Eko lahir di tahun kabisat.";
} else {
    echo "Eko tidak lahir di tahun kabisat.";
}

?>
