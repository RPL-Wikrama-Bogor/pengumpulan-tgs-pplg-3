<?php
$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menentukan Grade Nilai</h1>
    <form action="" method="post">
            <label for="nilai_pabp">Input Nilai PABP:</label>
            <input type="number" name="pabp" id="nilai_pabp" min="0" max="100" required>
            
            <label for="nilai_mtk">Input Nilai MTK:</label>
            <input type="number" name="mtk" id="nilai_mtk" min="0" max="100" required>
            
            <label for="nilai_dpk">Input Nilai DPK:</label>
            <input type="number" name="dpk" id="nilai_dpk" min="0" max="100" required>
            
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $nilai_pabp = $_POST['pabp'];
    $nilai_mtk = $_POST['mtk'];
    $nilai_dpk = $_POST['dpk'];

    $total = $nilai_pabp + $nilai_mtk + $nilai_dpk;
    $rata_rata = $total / 3 ; 

    if ($rata_rata <= 100 && $rata_rata >= 80) {
        echo $rata_rata . "(A)";
    }elseif ($rata_rata <= 80 && $rata_rata >= 75) {
        echo $rata_rata . "(B)";
    }elseif ($rata_rata <= 75 && $rata_rata >= 65) {
        echo $rata_rata . "(c)";
    }elseif ($rata_rata <= 65 && $rata_rata >= 45) {
        echo $rata_rata . "(D)";
    }elseif ($rata_rata <= 45 && $rata_rata >= 0) {
        echo $rata_rata . "(E)";
    }else {
        echo "Angka tidak memenuhi syarat";
    }
}