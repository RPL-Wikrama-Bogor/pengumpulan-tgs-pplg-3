<?php
$jam;
$menit;
$detik;
$total;
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
            <label for="jam">Masukkan jam: </label>
            <input type="number" name="hour" id="jam"><br>
        </div><br>
        <div>
            <label for="menit">Masukkan menit: </label>
            <input type="number" name="minute" id="menit"><br>
        </div><br>
        <div>
            <label for="detik">Masukkan detik: </label>
            <input type="number" name="second" id="detik"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
     
     $jam = $_POST['hour'];
     $menit = $_POST['minute'];
     $detik = $_POST['second'];
     
     $jam = $jam * 3600;
     $menit = $menit * 60;
     $total = $jam + $menit + $detik;
     
     echo "Jadi total detik nya adalah ".$total;
 }