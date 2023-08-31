<?php
$nama;
$gp;
$tunj;
$pjk;
$gb;
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $gp = $_POST['gp'];
    
    $tunj = 20 * $gp / 100;
    $pjk = 15 *($gp + $tunj)/100;
    $gb = $gp + $tunj - $pjk;

    echo $nama ."<br>" . $tunj . "<br>" . $pjk . "<br>" .  $gb;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gajih pokok</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">masukan nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="gp">masukan gajih pokok</label>
        <input type="number" name="gp" id="gp">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>