<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai</title>
</head>
<body>
    <h2>Menentukan Grade Nilai</h2>
        <form action="" method="post">
            <!-- <div style="display: flex; margin-bottom: 15px;">
                <label for="nama">Masukkan nama</label>
                <input type="text" name="nama" id="nama">
            </div> -->
            <div style="display: flex; margin-bottom: 15px;">
                <label for="nilai_agama">Masukkan nilai agama</label>
                <input type="number" name="agama" id="nilai_agama">
            </div>
            <div style="display: flex; margin-bottom: 15px;">
                <label for="nilai_matematika">Masukkan nilai matematika</label>
                <input type="number" name="matematika" id="nilai_matematika">
            </div>
            <div style="display: flex; margin-bottom: 15px;">
                <label for="nilai_dpk">Masukkan nilai dpk</label>
                <input type="number" name="dpk" id="nilai_dpk">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>  
</body>
</html>
<?php 
$agama;
$matematika;
$dpk;
$rata;

if (isset($_POST['submit'])) {
    $agama = $_POST['agama'];
    $matematika = $_POST['matematika'];
    $dpk = $_POST['dpk'];

    $rata = ($agama + $matematika + $dpk) / 3;
    
    if ($rata >= 80) {
        echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai A";
    } elseif ($rata >= 75) {
    echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai B";
    } elseif ($rata >= 65) {
        echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai C";
    } elseif ($rata >= 45) {
        echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai D";
    } elseif ($rata >= 0 ) {
        echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai E";
    } else {
        echo "Nilai rata-rata yang diperoleh mendapatkan grade nilai K";
    }

}