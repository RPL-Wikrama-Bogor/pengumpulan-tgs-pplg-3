<style>
    body{
        background-color:rgb(186, 186, 186);
        display: flex;
        margin: 0;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }
    .container {
        background-color: white;
        padding: 80px 50px;
        height: 220px;
        border-radius: 8px;
    }
    .container h2 {
        text-align: center;
        margin-top: 10px;
    }.container input[type=number]{
        border-radius: 5px;
        margin-bottom: 10;
        width: 100%;
        padding: 5px 7px;
    }
    .container button{
        border: none;
        border-radius: 5px;
        background-color: rgb(79, 79, 79);
        color: white;
    }
    .hasil{
        margin-bottom: 200px;
    }

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jam tambah 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Masukan Jam</h2>
    <form action="" method="post">
        <label for="jam">Masukan jam   </label>
        <input type="number" name="jam" id="jam">
        <br>
        <label for="menit">Masukan menit</label>
        <input type="number" name="menit" id="menit">
        <br>
        <label for="detik">Masukan detik</label>
        <input type="number" name="detik" id="detik">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</div>

</body>
</html>

<?php
$jam;
$menit;
$detik;

if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $detik = $detik + 1;

    if ($detik >=60) {
        $menit = $menit + 1;
        $detik ==00;
    }
    if ($menit >= 60) {
        $jam = $jam + 1;
        $menit = 00;
        $detik == 00;
    }
    if ($jam >= 24) {
        $jam = 00;
        $menit = 00;
        $detik =00;
    }
    echo sprintf('<h4>%02d : %02d : %02d</h4>', $jam , $menit , $detik);
}

?>