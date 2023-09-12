<?php
//menampilkan nilai
$nilai = ['80', '78', '72', '84', '92', '88'];
$replace = $nilai;
echo 'Nilai saya : ' . implode(",", $nilai);
echo "<br>";

// mencari maksimal
$max = max($nilai);
echo 'Dari keseluruhan nilai yang paling tinggi ialah : ' . $max;
echo "<br>";

//mencari yang paling kecil
$min = min($nilai);
echo 'Sedangkan nilai yang paling kecil : ' . $min;
echo "<br>";

//terkecil ke terbesar
$terkecil = sort($nilai);
echo 'Apabila di ututkan dari yang terkecil menjadi: ' ;
foreach ($nilai as $terkecil) {
    echo $terkecil . " ";
} 
echo "<br>";

//terbesar ke terkecil
$terbesar = rsort($nilai);
echo 'Apabila di ututkan dari yang terbesar menjadi : ' ;
foreach ($nilai as $terbesar) {
    echo $terbesar . " ";
} 
echo "<br>";

//rata rata nilai
$totalnilai = array_sum($nilai);
$jumlahnilai = count($nilai);
$ratarata = round($totalnilai / $jumlahnilai);
echo 'Apabila dibulatkan, rata-rata dari keseluruha nilai saya menjadi : ' . $ratarata;
echo "<br>";

//perbaikan nilai
echo 'Setelah melakukan perbaikan untuk nilai <strong>72</strong>, saya mendapat <strong>75</strong> jadi nilai saya sekarang : ';
array_splice($replace,2,1, 75);
foreach ($replace as $nilaibaru) {
    echo " <strong>$nilaibaru,</strong>";
}
echo '<br> Sehingga sekarang, urutan nilai dari yang terbesar menjadi : '; 
array_splice($nilai , 5, 1, 75);
foreach ($nilai as $nilaibaru) {
    echo " <strong>$nilaibaru,</strong>";

}

