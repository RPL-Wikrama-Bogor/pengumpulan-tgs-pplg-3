<?php
$nilai = [80, 78, 72, 84, 92, 88];
$nilai_besar ;
$nilai_kecil;
$ber_cil;
$cil_ber;
$rata_rata;
$total;
$update = $nilai;
$update;
$hasil_update;

// tampilan nilai
echo "Nilai saya adalah ; ";
for ($i=0; $i <count($nilai); $i++){
echo " <strong>$nilai[$i],</strong> ";
}   
// bilangan terbesar dan terkecil
$nilai_besar = max($nilai);
echo "<br>dari keseluruhan nilai yang paling tinggi adalah :  <strong>$nilai_besar</strong>
";
$nilai_kecil = min($nilai);
echo "<br>dari keseluruhan nilai yang paling kecil adalah : <strong>$nilai_kecil</strong>";

// bilangan terkecil ke terbesar
echo "<br>jika di urutkan dari yang terbesar ke terkecil adalah : ";
asort($nilai);
foreach ($nilai as $ber_cil){
    echo  "<strong>$ber_cil, </strong>";
}
// bilangan terbesar ke terkecil
echo "<br>jika di urutkan dari yang terkecil ke terbesar adalah : ";
arsort($nilai);
foreach ($nilai as $cil_ber){
    echo "<strong>$cil_ber, </strong>";
}
//mencari rata-rata
$total = array_sum($nilai);
$total = round($rata_rata = $total / count($nilai));
echo "<br>jika di buat rata_ratanya adalah <strong>$total</strong>";

//nilai jida di tambah 5
echo "<br>setelah melakukan perbaiikan untuk nilai <strong>72,</strong> saya mendapat nilai <strong>75,</strong> jadi nilai saya sekarang :" ;
array_splice($update, 2, 1, 75);
foreach ($update as $hasil_update){
    echo "<strong>$hasil_update, </strong>";
}
echo "<br>nilai sekarang dari yang terbesar menjadi : ";
array_splice($nilai,5, 1, 75);
$key = array_search(72, $nilai);
foreach($nilai as $key){
    echo "<strong>$key, </strong>";
}