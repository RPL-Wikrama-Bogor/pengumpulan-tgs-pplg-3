<?php 
$usiaAndi = 25;
$mtk = 83;
$bIndo = 87;
$bInggris = 86;
$rata_rata = (83 + 87 + 86) / 3;

if ($usiaAndi >= 16 && $usiaAndi <= 25) {
    echo "syarat usia terpenuhi";
    echo "<br>";
    if ($mtk >= 87) {
        echo "syarat mtk terpenuhi";
        echo "<br>";
        if ($bIndo >= 85) {
            echo "syarat b indo terpenuhi";
            echo "<br>";
            if ($bInggris >= 87) {
                echo "syarat b inggris terpenuhi";
                echo "<br>";
                if ($rata_rata >= 85) {
                    echo "syarat rata-rata terpenuhi";
                } else {
                    echo "syarat rata-rata tidak terpenuhi";
                }
            } else {
                echo "syarat b inggris  tidak terpenuhi";
            }
        } else {
            echo "syarat b indo tidak terpenuhi";
        }
    } else {
        echo "syarat mtk tidak terpenuhi";
    }
} else {
    echo "syarat usia tidak terpenuhi";
}