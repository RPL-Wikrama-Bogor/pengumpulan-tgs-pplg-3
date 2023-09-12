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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari Waktu</h1>
    <form action="" method="post">
        <div class="">
            <label for="waktu">Masukan Waktu : </label>
                <input type="number" name="waktu" id="waktu"><br><br>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$waktu = $_POST['waktu'];

if ($waktu >= 3600) {
    $jam = floor ($waktu / 3600);
    $waktu = $waktu - ($jam*3600);
}else {
    $jam = 0;
}

if ($waktu >= 60) {
    $menit = floor ($waktu / 60);
    $waktu = $waktu - ($menit*60);
}else {
    $menit = 0;
}

$detik = $waktu;

$hasil .= $jam . " jam " . $menit . " menit " . $detik . " detik ";

echo $hasil;

    }
    ?>
