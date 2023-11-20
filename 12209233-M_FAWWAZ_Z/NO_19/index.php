<?php
$terjual_vip;
$terjual_eksekutif;
$terjual_ekonomi;
$keuntungan_vip;
$keuntungan_eksekutif;
$keuntungan_ekonomi;
$total_keuntungan;
$totaltiketterjual;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Penjualan Tiket Bioskop</title>

</head>

<body>
    <div class="container">
        <h1>Penjualan Tiket Bioskop</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Jumlah tiket VIP terjual</td>
                    <td></td>
                    <td><input type="number" name="terjual_vip"></td>
                </tr>
                <tr>
                    <td>Jumlah tiket Eksekutif terjual</td>
                    <td></td>
                    <td><input type="number" name="terjual_eksekutif"></td>
                </tr>
                <tr>
                    <td>Jumlah tiket Ekonomi terjual</td>
                    <td></td>
                    <td><input type="number" name="terjual_ekonomi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="cari" name="submit"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $terjual_vip = intval($_POST["terjual_vip"]);
            $terjual_eksekutif = intval($_POST["terjual_eksekutif"]);
            $terjual_ekonomi = intval($_POST["terjual_ekonomi"]);

            $keuntungan_vip = 0;
            if ($terjual_vip >= 35) {
                $keuntungan_vip = $terjual_vip * 25; // Ubah persen
            } elseif ($terjual_vip >= 20 && $terjual_vip < 35) {
                $keuntungan_vip = $terjual_vip * 15; // Ubah persen
            } else {
                $keuntungan_vip = $terjual_vip * 5; // Ubah persen
            }

            $keuntungan_eksekutif = 0;
            if ($terjual_eksekutif >= 40) {
                $keuntungan_eksekutif = $terjual_eksekutif * 20; // Ubah persen
            } elseif ($terjual_eksekutif >= 20 && $terjual_eksekutif < 40) {
                $keuntungan_eksekutif = $terjual_eksekutif * 10; // Ubah persen
            } else {
                $keuntungan_eksekutif = $terjual_eksekutif * 2; // Ubah persen
            }

            $keuntungan_ekonomi = $terjual_ekonomi * 7; // Ubah persen
        
            // Menghitung total keuntungan
            $total_keuntungan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;

            // Menghitung total tiket terjual
            $totaltiketterjual = $terjual_vip + $terjual_eksekutif + $terjual_ekonomi;

            echo "<h2>Hasil</h2>";
            echo "Keuntungan dari tiket VIP= $keuntungan_vip%<br>";
            echo "Keuntungan dari tiket Eksekutif= $keuntungan_eksekutif%<br>";
            echo "Keuntungan dari tiket Ekonomi= $keuntungan_ekonomi%<br>";
            echo "Total keuntungan= $total_keuntungan<br>";
            echo "Total tiket terjual dari seluruh kelas= $totaltiketterjual<br>";
        }
        ?>
    </div>
</body>

</html>