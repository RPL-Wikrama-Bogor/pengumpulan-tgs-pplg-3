<?php
$beratBadan = 44; 
$tinggiBadanCm = 148;
$tinggiBadanM = $tinggiBadanCm / 100; 
$imt = $beratBadan / ($tinggiBadanM * $tinggiBadanM);

echo "IMT Beni: " . number_format($imt, 2) . "\n";


if ($imt < 18.5) {
    echo "Kategori: Berat badan kurang\n";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "Kategori: Normal\n";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Kategori: Berat badan lebih\n";
} else {
    echo "Kategori: Obesitas\n";
}
?>
