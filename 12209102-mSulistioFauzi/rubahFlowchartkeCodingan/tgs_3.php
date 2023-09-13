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
    <title>Penentuan Nilai Terbesar</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_satu">Masukkan angka pertama</label>
            <input type="number" name="angka_a" id="angka_satu">
        </div>
    </form>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_dua">Masukkan angka kedua</label>
            <input type="number" name="angka_b" id="angka_dua">
        </div>
    </form>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_tiga">Masukkan angka ketiga</label>
            <input type="number" name="angka_c" id="angka_tiga">
        </div>
    </form>
        <div>
            <button name="submit">Kirim</button>
        </div>
    <?php
        //isset :  mengecek aktif/tidak
            if (isset($_POST['submit'])) {
                //proses dalam pengisian input ke preperation 
                //didalam $_POST merupakan value dari attribute name 
                $a = $_POST['angka_a'];
                $b = $_POST['angka_b'];
                $c = $_POST['angka_c'];
                //tanda . di phpp disebut concat fungsinya untuk menghubungkan string dengan variable 
                if ($a > $b && $a > $c) {
                    echo "Dari angka : " . $a . " , " . 
                    $b . " , " . $c . ". Yang terbesar ialah <b>" . $a . "</b>";
                }
                elseif ($b > $a && $b > $c) {
                    echo "Dari angka : " . $b . " , " . 
                    $a . " , " . $c . ". Yang terbesar ialah <b>" . $b . "</b>";
                }
                elseif ($c > $a && $c > $b) {
                    echo "Dari angka : " . $c . " , " . 
                    $a . " , " . $b . ". Yang terbesar ialah <b>" . $c . "</b>";
                }
                else{
                    echo "sama besar";
                }
            }
    ?>
</body>
</html>