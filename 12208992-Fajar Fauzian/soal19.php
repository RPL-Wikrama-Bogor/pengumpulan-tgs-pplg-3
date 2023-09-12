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
     <title>Penghasilan Penjualan Tiket Bioskop</title>
     <style>
          body {
               font-family: Arial, sans-serif;
               background-color: #f0f0f0;
               margin: 0;
               padding: 0;
               text-align: center;
          }

          .container {
               background-color: #fff;
               border-radius: 8px;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
               padding: 20px;
               margin: 0 auto;
               max-width: 400px;
          }

          h1 {
               color: #333;
          }

          form,
          table {
               margin-top: 20px;
               text-align: left;
          }

          table tr td {
               padding: 10px;
          }

          input[type="number"] {
               width: 100%;
               padding: 10px;
               margin-bottom: 15px;
               border: 1px solid #ccc;
               border-radius: 5px;
          }

          input[type="submit"] {
               background-color: #007bff;
               color: #fff;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               cursor: pointer;
               font-weight: bold;
               transition: background-color 0.3s;
          }

          input[type="submit"]:hover {
               background-color: #0056b3;
          }

          h2 {
               color: #333;
               margin-top: 20px;
          }

          .result {
               font-weight: bold;
               margin-bottom: 10px;
          }
     </style>
</head>

<body>
     <div class="container">
          <h1>Penghasilan Penjualan Tiket Bioskop</h1>
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
                    $keuntungan_vip = $terjual_vip * 0.25;
               } elseif ($terjual_vip >= 20 && $terjual_vip < 35) {
                    $keuntungan_vip = $terjual_vip * 0.15;
               } else {
                    $keuntungan_vip = $terjual_vip * 0.05;
               }

               $keuntungan_eksekutif = 0;
               if ($terjual_eksekutif >= 40) {
                    $keuntungan_eksekutif = $terjual_eksekutif * 0.20;
               } elseif ($terjual_eksekutif >= 20 && $terjual_eksekutif < 40) {
                    $keuntungan_eksekutif = $terjual_eksekutif * 0.10;
               } else {
                    $keuntungan_eksekutif = $terjual_eksekutif * 0.02;
               }

               $keuntungan_ekonomi = $terjual_ekonomi * 0.07;

               // Menghitung total keuntungan
               $total_keuntungan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;

               // Menghitung total tiket terjual
               $totaltiketterjual = $terjual_vip + $terjual_eksekutif + $terjual_ekonomi;


               echo "<h2>Hasil</h2>";
               echo "Keuntungan dari tiket VIP= $keuntungan_vip<br>";
               echo "Keuntungan dari tiket Eksekutif= $keuntungan_eksekutif<br>";
               echo "Keuntungan dari tiket Ekonomi= <br>";
               echo "Total keuntungan= $total_keuntungan<br>";
               echo "Total tiket terjual dari seluruh kelas= $totaltiketterjual<br>";
          }
          ?>
     </div>
</body>

</html>