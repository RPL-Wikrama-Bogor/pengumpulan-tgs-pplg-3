
<?php
if (isset($_POST['submit'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];
    $terbesar = '0';

    if ($bilangan1 > $bilangan2 && $bilangan1 > $bilangan3) {
        $terbesar = $bilangan1;
    }elseif ($bilangan2 > $bilangan1 && $bilangan2 > $bilangan3) {
        $terbesar = $bilangan2;
    }elseif ($bilangan3 > $bilangan2 && $bilangan3 > $bilangan1) {
        $terbesar = $bilangan3;
    }else {
        $terbesar = "sama besar";
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>

<h2>Mencari Bilangan Terbesar</h2>

<form method="post" action="">
    Masukkan bilangan pertama: <input type="number" name="bilangan1"><br>
    Masukkan bilangan kedua: <input type="number" name="bilangan2"><br>
    Masukkan bilangan ketiga: <input type="number" name="bilangan3"><br>
    <input type="submit" name="submit" value="Cari Terbesar">
</form>
    <?php if (isset($_POST['submit'])) :  ?>
    <p>Bilangan terbesar adalah: <?=$terbesar; ?></p>
    <?php endif; ?>
</body>
</html>