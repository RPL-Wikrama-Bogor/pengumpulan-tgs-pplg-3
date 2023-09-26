<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          body {
               font-size: 1.5rem;
               font-weight: 50px;
               margin: 2rem;
               padding: 2rem;
               background-color: aqua;
               text-align: center;
               font-family: 'Poppins', sans-serif;
          }
     </style>
</head>

<body>
     <h1>Ini Adalah Nilai Saya</h1>
     <?php

     $nilai = [80, 78, 72, 84, 92, 88];
     $nilai_besar;
     $nilai_kecil;
     $ber_cil;
     $cil_ber;
     $rata_rata;
     $total;
     $update = $nilai;


     echo "Nilai Saya Adalah :";
     for ($i = 0; $i < count($nilai); $i++) {
          echo "$nilai[$i],";
     }

     $nilai_besar = max($nilai);
     echo "<br>Dari keseluruhan nilai yang paling tertinggi adalah : $nilai_besar ";
     $nilai_kecil = min($nilai);
     echo "<br>Dari keseluruhan nilai yang paling terkecil adalah : $nilai_kecil ";

     echo "<br>Apabila diurutkan dari yang terkecil menjadi : ";
     asort($nilai);
     foreach ($nilai as $ber_cil) {
          echo $ber_cil, " ";
     }

     echo "<br>Apabila diurutkan dari yang terbesar menjadi : ";
     arsort($nilai);
     foreach ($nilai as $cil_ber) {
          echo $cil_ber, " ";
     }

     $total = array_sum($nilai);
     $total = round($rata_rata = $total / count($nilai));
     echo "<br>Jika di buat rata rata adalah $total";

     echo "<br>Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai 75 jadi nilai saya sekarang :";
     array_splice($update, 2, 1, 75);
     foreach ($update as $hasil_update) {
          echo " $hasil_update";
     }

     echo "<br>Nilai sekarang dari yang terbesar menjadi";
     array_splice($nilai, 5, 1, 75);
     $key = array_search(72, $nilai);
     foreach ($nilai as $key) {
          echo " $key";
     }

     ?>
</body>

</html>