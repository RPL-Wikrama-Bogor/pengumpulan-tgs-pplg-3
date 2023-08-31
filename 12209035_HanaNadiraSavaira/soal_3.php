<?php
//preparation
$a;
$b;
$c;
?>

<!-- input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai Terbesar</title>
</head>

<body>
    <h2>Form Menentukan Nilai Terbesar</h2>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_satu">Masukan angka pertama</label>
            <input type="number" name="angka_a" id="angka_satu">
        </div>
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_dua">Masukan angka kedua</label>
            <input type="number" name="angka_b" id="angka_dua">
        </div>
        <div style="display: flex; margin-bottom: 15px;">
            <label for="angka_tiga">Masukan angka ketiga</label>
            <input type="number" name="angka_c" id="angka_tiga">
        </div>
        <button type="submit" name="submit">submit</button>
    </form>  
</body>
</html>

<?php 
//isset : mengecek aktif/tidak
if (isset($_POST['submit'])) {
    //proses pengisian input ke preparation 
    //didalam $_POST merupakan value dari atribut name
    $a = $_POST['angka_a'];
    $b = $_POST['angka_b'];
    $c = $_POST['angka_c'];
    //tanda . di php namanya concat fungsinya untuk menghubungkan 
    //string dan variabel
    if ($a > $b && $a > $c) {
        echo "Dari angka : " . $a . ", " . $b . ", " . $c . " Yang terbesar ialah <b>" . $a . "</b>";
    } elseif ($b > $a && $b > $c) {
        echo "Dari angka : " . $a . ", " . $b . ", " . $c . " Yang terbesar ialah <b>" . $b . "</b>";
    } elseif ($c > $a && $c > $b) {
        echo "Dari angka : " . $a . ", " . $b . ", " . $c . " Yang terbesar ialah <b>" . $c . "</b>";
    } else {
        echo "Angka sama besar";
    }
}