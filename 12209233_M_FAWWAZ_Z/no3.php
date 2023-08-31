<?php 

$a;
$b;
$c;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari nilai terbesar</h1>
    <form action="" method="post">
        <div class="">
            <label for="angka_satu">Masukan angka pertama : </label>
                <input type="number" name="angka_a" id="angka_satu">
        </div>
        <div class="">
            <label for="angka_dua">Masukan angka kedua : </label>
                <input type="number" name="angka_b" id="angka_dua">
        </div>
        <div class="">
            <label for="angka_tiga">Masukan angka ketiga : </label>
                <input type="number" name="angka_c" id="angka_tiga">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$a = $_POST['angka_a'];
$b = $_POST['angka_b'];
$c = $_POST['angka_c'];

if($a > $b && $a > $c){
    echo "Angka terbesar adalah " . $a;
}elseif($b > $a && $b > $c){
    echo "Angka terbesar adalah " . $b;
}elseif($c > $a && $c > $b){
    echo "Angka terbesar adalah " . $c;
}else {
    echo "Angka sama besar";
}
}
?>