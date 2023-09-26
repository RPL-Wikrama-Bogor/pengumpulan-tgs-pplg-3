<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

$nama_makanan = 0;
$harga_makanan = 0;
$total_harga_makanan = 0;
$nama_minuman = 0;
$harga_minuman = 0;
$total_harga_minuman = 0;
$total_harga = 0;
$jml_minuman = 0;
$total_diskon_makanan = 0;
$jml_minuman = 0;
$total_diskon_minuman = 0;

$listMakanan = [
     [
          "makanan" => "Chicken Steak",
          "harga" => 50000
     ],
     [
          "makanan" => "Kentang Goreng",
          "harga" => 20000
     ],
     [
          "makanan" => "Telur Dadar",
          "harga" => 20000
     ],
     [
          "makanan" => "Spageti",
          "harga" => 15000
     ],
     [
          "makanan" => "Salad Buah",
          "harga" => 15000
     ],
];

$listMinuman = [
     [
          "minuman" => "Juice Alpukat",
          "harga" => 15000
     ],
     [
          "minuman" => "Juice Jambu",
          "harga" => 15000
     ],
     [
          "minuman" => "Milkshake Coklat",
          "harga" => 20000
     ],
     [
          "minuman" => "Milkshake Strawberry",
          "harga" => 20000
     ],
     [
          "minuman" => "Juice Kelapa",
          "harga" => 15000
     ]
];

if (isset($_POST['submit'])) {
     // Makanan
     $makanan                = $_POST['makanan'];
     $jml_makanan            = (int)$_POST['jml_makanan'] ?? 0;
     $nama_makanan           = @$listMakanan[$makanan]["makanan"];
     $harga_makanan          = @$listMakanan[$makanan]["harga"] * $jml_makanan;

     // Minuman
     $minuman                = $_POST['minuman'];
     $jml_minuman            = (int)$_POST['jml_minuman'];
     $nama_minuman           = $listMinuman[$minuman]["minuman"];
     $harga_minuman          = $listMinuman[$minuman]["harga"] * $jml_minuman;

     // Diskon Makanan
     $diskon_makanan         = diskon($jml_makanan);
     $total_diskon_makanan   = $diskon_makanan * $harga_makanan;

     // Diskon Minuman
     $diskon_minuman         = diskon($jml_minuman);
     $total_diskon_minuman   = $diskon_minuman * $harga_minuman;

     // Total
     $total_harga_makanan    = $harga_makanan - $total_diskon_makanan;
     $total_harga_minuman    = $harga_minuman - $total_diskon_minuman;
     $total_harga            = $total_harga_makanan + $total_harga_minuman;
}

function diskon($jumlah)
{
     switch ($jumlah) {
          case $jumlah >= 5:
               return 0.1;
          case $jumlah >= 3:
               return 0.05;
          default:
               return 0;
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kasir Warung</title>
     <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
          @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          body {
               font-family: "Poppins", sans-serif;
               background-color: #f4f4f4;
               color: #333;

          }

          h1 {
               text-align: center;
          }

          .container {
               max-width: 1200px;
               margin: 0 auto;
               padding: 20px;
               border: 1px solid #ccc;
               border-radius: 15px;
               border: 1px solid transparent;
               backdrop-filter: blur(10rem);
               /* box-shadow: 1.2rem 1.2rem 1.2rem rgba(0, 0, 0, 0.7); */
               border-top-color: rgba(225, 225, 225, 0.1);
               border-left-color: rgba(225, 225, 225, 0.1);
               border-bottom-color: rgba(225, 225, 225, 0.1);
               border-right-color: rgba(225, 225, 225, 0.1);
          }

          .menu {
               width: 100%;
               padding: 20px;
               background-color: #fff;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
               border-radius: 5px;
               margin-bottom: 20px;
          }

          .menu__header {
               text-align: center;
               margin-bottom: 20px;
               font-size: 24px;
               color: #333;
          }

          .menu__list {
               list-style: none;
          }

          .menu__list li {

               margin-bottom: 15px;
               border: 1px solid #ddd;
               padding: 10px;
               border-radius: 5px;
               background-color: #fff;
          }

          .menu__list li:last-child {
               margin-bottom: 0;
          }

          .form {
               width: 100%;
               padding: 20px;
               background-color: #fff;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
               border-radius: 5px;
               margin-bottom: 20px;
          }

          .form__button {
               margin-top: 20px;
               padding: 10px 20px;
               display: inline-block;
               background-color: #FF9B50;
               color: #fff;
               border: none;
               cursor: pointer;
               border-radius: 5px;
          }

          .form__button:hover {
               background-color: #FF9B50;
          }

          .pembayaran {
               width: 100%;
               padding: 20px;
               background-color: #fff;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
               border-radius: 5px;
          }

          .pembayaran__header {
               text-align: center;
               margin-bottom: 20px;
               font-size: 24px;
               color: #FF9B50;
          }

          table {
               width: 100%;
               border-collapse: collapse;
          }

          table,
          th,
          td {
               border: 1px solid #ccc;
          }

          th,
          td {
               padding: 10px;
               text-align: left;
          }
     </style>
</head>

<body>

     <br>
     <div class="container">
          <h1>Warung Makan Online</h1>
          <!-- <img width="150" class="img" src="img/warungmakan.jpeg" alt=""> -->
          <div class="menu">
               <h2 class="menu__header">Daftar Menu Restoran</h2>
               <table class="menu__list">
                    <thead>
                         <tr>
                              <th>Makanan</th>
                              <th>Minuman</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td>Menu : Chicken Steak <br />Harga : Rp. 50.000</td>
                              <td>Menu : Juice Alpukat <br />Harga : Rp. 15.000</td>
                         </tr>
                         <tr>
                              <td>Menu : Kentang Goreng <br />Harga : Rp. 20.000</td>
                              <td>Menu : Juice Jambu <br />Harga : Rp. 10.000</td>
                         </tr>
                         <tr>
                              <td>Menu : Telur Dadar <br />Harga : Rp. 20.000</td>
                              <td>Menu : Milkshake Coklat <br />Harga : Rp. 10.000</td>
                         </tr>
                         <tr>
                              <td>Menu : Spageti <br />Harga : Rp. 15.000</td>
                              <td>Menu : Milkshake Strawberry <br />Harga : Rp. 20.000</td>
                         </tr>
                         <tr>
                              <td>Menu : Salad Buah <br />Harga : Rp. 15.000</td>
                              <td>Menu : Juice Kelapa <br />Harga : Rp. 15.000</td>
                         </tr>
                    </tbody>
               </table>
          </div>

          <form method="POST" class="form">
               <table>
                    <tr>
                         <td>Pilih Makanan</td>
                         <!-- <td>:</td> -->
                         <td>
                              <select name="makanan" id="">
                                   <option hidden>Pilih Menu</option>
                                   <?php
                                   foreach ($listMakanan as $key => $pilihmakan) {
                                   ?>
                                        <option value="<?= $key ?>"><?= $pilihmakan['makanan'] ?></option>
                                   <?php
                                   }
                                   ?>
                              </select>
                         </td>
                    </tr>

                    <tr>
                         <td>Jumlah Pembelian Makanan</td>
                         <!-- <td>:</td> -->
                         <td><input type="number" name="jml_makanan"></td>
                    </tr>

                    <tr>
                         <td>Pilih Minuman</td>
                         <!-- <td>:</td> -->
                         <td>
                              <select name="minuman" id="">
                                   <option hidden>Pilih Menu</option>
                                   <?php
                                   foreach ($listMinuman as $key => $pilihminum) {
                                   ?>
                                        <option value="<?= $key ?>"><?= $pilihminum['minuman'] ?></option>
                                   <?php
                                   }
                                   ?>
                              </select>
                         </td>
                    </tr>

                    <tr>
                         <td>Jumlah Pembelian Minuman</td>
                         <!-- <td>:</td> -->
                         <td><input type="number" name="jml_minuman"></td>
                    </tr>

                    <tr>
                         <td><input type="submit" name="submit" class="form__button" value="Beli"></td>
                    </tr>
               </table>
          </form>

          <div class="pembayaran">
               <h2 class="pembayaran__header">Bukti Pembelian</h2>
               <table>
                    <tr>
                         <td>Makanan</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. $nama_makanan ($jml_makanan)" ?></td>
                    </tr>
                    <tr>
                         <td>Harga Makanan</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. " . number_format($harga_makanan, 0, ',', '.') . "  ( Dis : " . number_format($total_diskon_makanan, 0, ',', '.') . ")" ?>
                         </td>
                    </tr>
                    <tr>
                         <td>Jumlah Harga Makanan</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. " . number_format($total_harga_makanan, 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                         <td>Minuman</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. $nama_minuman ($jml_minuman)" ?></td>
                    </tr>
                    <tr>
                         <td>Harga Minuman</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. " . number_format($harga_minuman, 0, ',', '.') . "  ( Dis : " . number_format($total_diskon_minuman, 0, ',', '.') . ")" ?>
                         </td>
                    </tr>
                    <tr>
                         <td>Jumlah Harga Minuman</td>
                         <!-- <td>:</td> -->
                         <td><?php echo "Rp. " . number_format($total_harga_minuman, 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                         <td>Total Pembayaran</td>
                         <!-- <td>:</td> -->
                         <td><b><?php echo "Rp. " . number_format($total_harga, 0, ',', '.') ?></b></td>
                    </tr>
               </table>
          </div>
     </div>
</body>

</html>