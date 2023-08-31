<?php
$jam;
$menit;
$detik;
$waktu;
$hasil = "";
?>
<!-- input -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Detik ke Jam</title>
</head>

<body>
    <h1>Konversi Jam</h1>
    <p>Mengkonversi total detik dalam bentuk jam-menit-detik</p>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="waktu">Waktu Awal : </label>
            <input type="number" name="waktu" id="waktu_awal">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        $jam = 0;
        $menit = 0;
        $detik = 0;
        if ($waktu >= 3600) {
            $jam = floor($waktu / 3600);
            $waktu = $waktu - ($jam * 3600);
            $hasil .= $jam . " Jam ";
        }
        if ($waktu >= 60) {
            $menit = floor($waktu / 60);
            $menit = $waktu - ($menit * 60);
            $hasil .= $menit . " Menit ";
        }

        $detik = $waktu;
        $hasil .= $detik . " Detik. ";
        echo $hasil;
    }
    ?>

</body>

</html>