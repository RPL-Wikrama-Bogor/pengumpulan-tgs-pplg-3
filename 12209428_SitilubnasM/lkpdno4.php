<?php
$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nama">Masukkan nama: </label>
            <input type="text" name="name" id="nama"><br>
        </div><br>
        <div>
            <label for="gaji_pokok">Masukkan nominal gaji pokok: </label>
            <input type="text" name="gaji_pok" id="gaji_pokok"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    
    $nama=$_POST['name'];
    $gaji_pokok=$_POST['gaji_pok'];
    
    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    
    echo "Nama anda adalah ".$nama."<br>";
    echo "Besar tunjangan nya adalah ".number_format($tunj) ."<br>";
    echo "Besar pajak nya adalah ".number_format($pjk)  ."<br>";
    echo "Jadi gaji bersih nya adalah ".number_format($gaji_bersih)  ."<br>";
    
}