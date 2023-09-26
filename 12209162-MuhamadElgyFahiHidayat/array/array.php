<?php
 $nilai_saya = array(80, 78, 72, 84, 92, 88);
 echo "Nilai saya : <strong>" . implode(", ", $nilai_saya) . "</strong><br>";
 $nilai_tertinggi = max($nilai_saya);
 echo "Dari keseluruhan nilai, yang paling tinggi adalah : <strong>" . $nilai_tertinggi . "</strong><br>";
 $nilai_terendah = min($nilai_saya);
 echo "Sedangkan yang paling kecil adalah : <strong>" . $nilai_terendah . "</strong><br>";
 sort($nilai_saya);
 echo "Apabila diurutkan dari yang terkecil menjadi : <strong>" . implode(", ", $nilai_saya) . "</strong><br>";
 $nilai_saya = array(80, 78, 72, 84, 92, 88); 
 rsort($nilai_saya);
 echo "Apabila diurutkan dari yang terbesar menjadi : <strong>" . implode(", ", $nilai_saya) . "</strong><br>";
 $rata_rata = round(array_sum($nilai_saya) / count($nilai_saya));
 echo "nilai rata rata : <strong>" . $rata_rata . "</strong><br>";
 ?>
 <?php
 $nilai_saya = array(80, 78, 72, 84, 92, 88);
 $nilai_saya[array_search(72, $nilai_saya)] = 75;
 echo "Apabila diurutkan kembali setelah di ubah nilainya menjadi : <strong>" . implode(", ", $nilai_saya) . "</strong><br>";
 rsort($nilai_saya);
 echo "Apabila diurutkan dari yang terbesar menjadi : <strong>" . implode(", ", $nilai_saya) . "</strong><br>";
?>
