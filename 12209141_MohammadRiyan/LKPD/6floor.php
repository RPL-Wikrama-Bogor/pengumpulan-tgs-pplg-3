<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
<h1>Konversi <label>Total Detik</label></h1>
    <form action="" method="post">
        <div>
            <label for="waktu_awal">Waktu Awal: </label>
            <input type="number" name="waktu" id="waktu_awal">
        </div>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    
<?php 
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        $j = 0;
        $m = 0;
        $d = 0;
        $hasil = "";
        if ($waktu >= 3600) {
            $j = floor($waktu/3600);
            $waktu = $waktu - ($j*3600);
            $hasil .= $j . " Jam ";
        }
        if ($waktu >= 60) {
            $m = floor($waktu/60);
            $waktu = $waktu - ($m*60);
            $hasil .= $m . " Menit ";
        }
        $d = $waktu;
        $hasil .= $d . " Detik";
        echo "<br>";
        echo $hasil;
        
    }
?>
</center>
</body>
</html>