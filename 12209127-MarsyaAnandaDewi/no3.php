<?php

$a;
$b;
$c;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mennetukan Nilai Terbesar</title>
</head>
<body>
    <!-- bagian nama nama yang di simpan sebelum tanda = disebut dengan attribute,yang di dalam tanda petik disebut value attribute,
yang di dalam < di sebut tag -->
    <!-- value for di label dan value id di dalam label harus sama: untuk menghubungkan label dan inputannya -->
    <!-- value dari attribute name di gunakan untuk mengambil value yang di kirim user (versi sistem) -->
    <form action="" method="post">
        <div style="display: flex; margin-bottom : 15px;">
        <label for="angka_satu">Masukan Angka Pertama</label>
        <input type="number" name="angka_a" id="angka_satu">
    </div>
     <div style="display: flex; margin-bottom : 15px;">
        <label for="angka_satu">Masukan Angka Kedua</label>
        <input type="number" name="angka_b" id="angka_dua">
    </div>
     <div style="display: flex; margin-bottom : 15px;">
        <label for="angka_satu">Masukan Angka Ketiga</label>
        <input type="number" name="angka_c" id="angka_tiga">
    </div>
    <button type="submit" name="submit">Kirim</button>
    </form>
    <?php
    // isset : mengecek aktif/tidak 
    if (isset($_POST['submit'])){
        // proses pengisian input ke preparation 
        // didalam $_POST merupakan value dari attribute name
        $a = $_POST['angka_a'];
        $b = $_POST['angka_b'];
        $c = $_POST['angka_c'];
        // tanda . di php namanya concat fungsinya untuk menghubungkan string dan variable
         if ($a > $b && $a > $c){
            echo "Dari angka : " .$a ." , ".
            $b ." , ". $c .". Yang terbesar
            ialah <b>" . $a . "</b>";
         }else if ($b > $a && $b > $c){
            echo "Dari angka : ". $a . " , " . 
            $b . "," . $c . ". Yang terbesar
            ialah <b>" . $b . "</b>";
     
         }else if ($b > $a && $b > $c){
             echo "Dari angka : ". $a . " , " . 
             $b . "," . $c . ". Yang terbesar
             ialah <b>" . $c . "</b>";
      
          }else {
             echo "Angka sama besar";
        }
     
         }

    ?>
</body>
</html>

