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
    <h1>Konversi Jam</h1>
    <p>Mengkonversi jam-menit-detik ke total detik</p>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="jam">Masukkan Jam: </label>
            <input type="number" name="hour" id="jam" >
        </div>

        <div style="display: flex; margin-bottom: 15px;">
            <label for="menit">Masukkan Menit: </label>
            <input type="number" name="minute" id="menit">
        </div>

        <div style="display: flex; margin-bottom: 15px;">
            <label for="detik">Masukkan Detik: </label>
            <input type="number" name="second" id="detik">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
   $jam = $_POST['hour'];
   $menit = $_POST['minute'];
   $detik = $_POST['second'];

   $t_jam = $jam * 3600;
   $t_menit = $menit * 60;
   $total = $t_jam + $t_menit + $detik;

   echo "Total setelah dikonversikan : " . number_format($total) . " detik <br>";
}