<?php
$bilangan = [75,77,87,70,90,81,69,87,66];
$kompeten = [];
$belum = [];

   foreach($bilangan as $bil){
      if($bil >= 75){
        $kompeten[] = $bil;
      }else {
        $belum[] = $bil;
      }
   }

   echo "Nilai Kompeten : " . implode(' ' , $kompeten);
   echo "<br>";
   echo "Nilai belum Kompeten : " . implode(' ' , $belum);


?>