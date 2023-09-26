<?php 
    $nilai = [80,78,72,84,92,88];
    $kalimat = implode(", ",$nilai);
    echo "$kalimat <br>";

    $larg=max($nilai);
    $smal=min($nilai);
    

    $terkecil = $nilai;
    asort($terkecil);

    $terbesar = $nilai;
    arsort($terbesar);

    $average = round(array_sum($nilai) / count($nilai));

echo "Dari kesuluruhan nilai yang paling tinggi ialah " . $larg ."<br>";
echo "Sedangkan nilai yang paling kecil" . $smal . "<br>";
echo "Urutan nilai terbesar " . implode(', ', $terbesar) . " <br>";
echo "Urutan nilai kecil " . implode(', ', $terkecil) . " <br>";
echo "Apabila dibulatkan, rata-rata dari keselurahan nilai saya menjadi" . $average  . "<br>";
echo "Setelah melakukan perbaikan untuk nilai $nilai[2], ";
array_splice($nilai, 2, 1, 75);
    echo "saya mendapat nilai {$nilai[2]}. Jadi <br> nilai saya sekarang:" . implode(', ', $nilai) . "<br>";
    arsort($nilai);
    echo "Sehingga sekarang, urutan nilai dari yang terbesar menjadi: " . implode(', ', $nilai) . "<br>";
?>