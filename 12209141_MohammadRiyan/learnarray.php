<?php 
    $nilai = [80, 78, 72, 84, 92, 88];
    $nilaiTertinggi = max($nilai); // Menemukan nilai tertinggi
    $nilaiTerkecil = min($nilai); // Menemukan nilai terkecil

    // Mengurutkan yang terkecil
    $nilaiTerkecilSorted = $nilai;
    asort($nilaiTerkecilSorted);

    // Mengurutkan yang terbesar
    $nilaiTertinggiSorted = $nilai;
    arsort($nilaiTertinggiSorted);

    // Menggabungkan nilai-nilai
    $nilaiTerurut = implode(', ', $nilai);

    // Menghitung rata-rata
    $rataRata = array_sum($nilai) / count($nilai);

    // // Array_splice
    // array_splice($nilai, 2, 1, 75);

    echo "Nilai Saya: <strong>$nilaiTerurut</strong> <br>";
    echo "Dari keseluruhan nilai yang paling tinggi ialah: <strong>$nilaiTertinggi</strong> <br>";
    echo "Sedangkan nilai yang paling kecil: <strong>$nilaiTerkecil</strong> <br>";
    
    echo "Apabila diurutkan dari yang terkecil menjadi : <strong>" . implode(', ', $nilaiTerkecilSorted) . "</strong><br>";
    echo "Apabila diurutkan dari yang terbesar menjadi : <strong>" . implode(', ', $nilaiTertinggiSorted) . "</strong><br>";
    echo "Apabila dibulatkan, rata-rata dari keselurahan nilai saya menjadi <strong>" . round($rataRata) . "</strong><br>";
    echo "Setelah melakukan perbaikan untuk nilai <strong>$nilai[2]</strong>, ";
    array_splice($nilai, 2, 1, 75);
    echo "saya mendapat nilai <strong>{$nilai[2]}</strong>. Jadi <br> nilai saya sekarang: <strong>" . implode(', ', $nilai) . "</strong><br>";
    arsort($nilai);
    echo "Sehingga sekarang, urutan nilai dari yang terbesar menjadi: <strong>" . implode(', ', $nilai) . "</strong><br>";
?>
