<?php
   $bil1 = [80,77,65,89,55,12,90,86];
   $bil2 = [77,99,55,81,45,90,91,98];
   $kelompokPertama = array_intersect($bil1, $bil2);
   $kelompokKedua = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));
   
   echo "Kelompok Pertama: " . implode(', ', $kelompokPertama) . "<br>";
   echo "Kelompok Kedua: " . implode(', ', $kelompokKedua);
   