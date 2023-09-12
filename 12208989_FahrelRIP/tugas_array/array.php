<?php
    $nilai = ["80", "78", "72", "84", "92", "88"];
    $replace = $nilai;

    //menampilkan nilai
    echo 'Nilai Saya : ' . implode(", ", $nilai);
    echo "<br>";

    //mencari nilai terbesar
    $max = max($nilai);
    echo 'Dari keseluruhan nilai yang paling tinggi adalah : ' . $max;
    echo "<br>";

    //mencari nilai terkecil
    $min = min($nilai);
    echo 'Sedangkan nilai yang paling kecil adalah : ' . $min;
    echo "<br>";

    //urutan bilangan dari tekecil
    $terkecil = asort($nilai);
    echo 'Apabila diurutkan dari yang terkecil menjadi :';
    foreach($nilai as $terkecil){
        echo " " . $terkecil;
    }
    echo "<br>";

    //urutan bilangan dari terbesar
    $terbesar = arsort($nilai);
    echo 'Apabila diurutkan dari yang terbesar menjadi :';
    foreach($nilai as $terbesar){
        echo " " . $terbesar;
    }
    echo "<br>";

    //mencari rata rata
    $jumlah = array_sum($nilai);
    $jml = count($nilai);
    $rata = round($jumlah / $jml);
    echo 'Apabila dibulatkan, rata-rata dari keseluruhan nilai menjadi : ' . $rata;
    echo "<br>";

    //menambahkan data
    echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapat 75, Jadi nilai saya sekarang adalah : ";
    array_splice($replace, 2, 1, 75);
        foreach($replace as $nilaiBaru){
            echo " $nilaiBaru";
        }
    
    echo '<br> Sehingga sekarang, urutan nilai dari yang terbesar menjadi : '; 
    array_splice($nilai , 5, 1, 75);
    foreach ($nilai as $nilaiAkhir) {
        echo " <strong>$nilaiAkhir,</strong>";
        
    }
?>



    

