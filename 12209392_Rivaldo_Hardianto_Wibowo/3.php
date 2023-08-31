<!-- preperation -->
<?php
$a;
$b;
$c;
//isset untuk mengecek apakah aktif:tidak
if(isset($_POST['submit'])){
    //proses pengisian input ke preperation
    //didalam $post merupakan value dari artibute name
    $a = $_POST['angka_a'];
    $b = $_POST['angka_b'];
    $c = $_POST['angka_c'];
// tanda . di php namanya concat fungsinya untuk menghubungkan string dan variable 
    if ($a > $b && $a > $c) {
        echo "dari angka : " . $a . " , " . $b . " , " . $c . " yang terbesar ialah <b>" . $a . "</b>";
    }elseif ($b > $a && $b > $c){
        echo  "dari angka : " . $a . " , " . $b . " , " . $c . " yang terbesar ialah <b>" . $b . "</b>";
    }elseif ($c > $a && $c > $b){
        echo  "dari angka : " . $a . " , " . $b . " , " . $c . " yang terbesar ialah <b>" . $c . "</b>";
}else {
    echo "angka sama rata";
}
}


?>
<!-- input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>and</title>
</head>
<!-- bagian naman nama yang disimpan sebelum tanda disebut dengan atribute, 
yang didalam tanda petik disebut -->
<!-- value for di label dan value id didalam label harus sama untuk menghubungkan label dan inputnya -->
<!-- value dari artibute name digunakan untuk mengambil value yang dikirim user -->
<body>
    <form action="" method="post"><div>
        <label for="angka_satu">masukan angka pertama</label>
        <input type="number" name="angka_a" id="angka_satu">
        <br>
        <label for="angka_dua">masukan angka kedua</label>
        <input type="number" name="angka_b" id="angka_dua">
        <br>
        <label for="angka_tiga">masukan angka ketiga</label>
        <input type="number" name="angka_c" id="angka_tiga">
        <br>
        <button type="submit" name="submit">kirim</button>
    </div>
    </form>
</body>
</html>