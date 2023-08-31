<?php
$waktu;
$jam;
$menit;
$detik;
$hasil = "";
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
            <label for="t_detik">Masukkan total waktu: </label>
            <input type="number" name="waktu" id="t_detik"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    
    $waktu = $_POST['waktu'];
    $jam = 0;
    $menit = 0;
    $detik = 0;
    if ($waktu >= 3600){
        $jam = floor($waktu / 3600);
        $waktu = $waktu - ($jam * 3600);
        $hasil .= $jam . "jam";
    }if($waktu >= 60){
        $menit = floor($waktu / 60);
        $waktu = $waktu - ($menit * 60);
        $hasil .= $menit . "menit";
    }
    $detik = $waktu;
    $hasil .= $detik . "detik";
    echo $hasil;
}