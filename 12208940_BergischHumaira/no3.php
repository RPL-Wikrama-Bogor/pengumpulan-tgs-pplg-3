<?php
// preparation
$a;
$b;
$c;
// input
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- bagian nama2 yang disimpan sebelum tanda = disebut dengan atribut, 
    yg didalam tanda petik disebut value atribut,yg didalam <disebut tag  -->
    <!-- value for didalam label dan value id didalma label harus sama : untuk menghungkan label dengan inpnya -->
    <!-- value dari atribut name digunakan untuk mangambil value yang dikiim user (versi sistem) -->
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
        <label for="angka_satu">Masukkan angka pertama:</label>
        <input type="number" name="angka_a" id="angka_satu">
        </div>

        <div style="display: flex; margin-bottom: 15px;">
        <label for="angka_dua">Masukkan angka kedua:</label>
        <input type="number" name="angka_b" id="angka_dua">
        </div>

        <div style="display: flex; margin-bottom: 15px;">
        <label for="angka_tiga">Masukkan angka ketiga:</label>
        <input type="number" name="angka_c" id="angka_tiga">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
// isset: mengecek aktif/tidak tombol submit yang ada di bawah
if (isset($_POST['submit'])) {
    //proses pengisian input ke preparation
    // disalma $_POST merupakan value dari atibut name
    $a = $_POST['angka_a'];
    $b = $_POST['angka_b'];
    $c = $_POST['angka_c'];
    // tanda . di php namanya concat untuk menghubungkan string dan variabel
    if ($a > $b && $a > $c) {
       echo "Dari angka : ". $a . " , " . 
       $b . "," . $c . ". Yang terbesar
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