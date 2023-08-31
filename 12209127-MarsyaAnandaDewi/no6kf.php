<?php
$waktu;
$jam;
$menit;
$detik;
$hasil = "";
?>


<!-- input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konversi waktu</title>
</head>
<body>
    <form action="" method = "post">
    <div style="display: flex;">
    <label for="waktu_awal">Waktu awal: </label>
    <input type="number" name="waktu" id="waktu_awal">
    </div>
    <button type="submit" name="submit">Kirim</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $waktu = $_POST ['waktu'];
        $jam = 0;
        $menit = 0;
        $detik = 0;
        if($waktu >= 3600) {
            $jam = floor($waktu/3600);
            $waktu = $waktu - ($menit*60);
            $hasil .= $jam . " Jam ";
        }

        if($waktu >= 60) {
            $jam = floor($waktu/60);
            $waktu = $waktu - ($menit*60);
            $hasil .= $menit . " Menit ";
        }
        $detik = $waktu;
        $hasil .= $detik . " Detik ";

    }
    ?>
</body>
</html>