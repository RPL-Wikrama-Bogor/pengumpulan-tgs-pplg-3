<?php
$panjangTanah = 13;
$lebarTanah = 9;
$luasTanah = $panjangTanah * $lebarTanah;


if ($luasTanah < 90) {
    $tipeRumah = "Tipe 36 : <90 m2";
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = "Tipe 45 : 90-96 m2";
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = "Tipe 54 : 96- 120 m2";
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = "Tipe 60 : 120-150 m2";
} else {
    $tipeRumah = "Tipe 70 : >150 m2";
}


echo "Luas tanah: " . $luasTanah . " m^2\n";
echo "<br>";
echo "Tipe rumah yang direncanakan: " . $tipeRumah;

?>
