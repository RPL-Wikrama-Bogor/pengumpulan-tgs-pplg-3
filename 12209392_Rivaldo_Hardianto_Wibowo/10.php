<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari grade nilai</title>
</head>
<body>
    <form action="" method="post">
        <label for="pabp">masukan nilai pabp</label>
        <input type="number" name="pabp" id="pabp">
        <br>
        <label for="mtk">masukan nilai mtk</label>
        <input type="number" name="mtk" id="mtk">
        <br>
        <label for="dpk">masukan nilai dpk</label>
        <input type="number" name="dpk" id="dpk">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
$pabp;
$mtk;
$dpk;
$rata;

if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];

    $rata = $pabp + $mtk + $dpk / 3;

    if ($rata <=100 && $rata >= 80) {
        echo "kriteria siswa A";
    }elseif ($rata <=80 && $rata >= 75) {
        echo "kriteria siswa B";
    }elseif ($rata <=75 && $rata >= 65) {
        echo "kriteria siswa C";
    }
    elseif ($rata <=65 && $rata >= 45) {    
        echo "kriteria siswa D";
    }
    elseif ($rata <=45 && $rata >=0) {
        echo "kriteria siswa E";
    }
}
?>