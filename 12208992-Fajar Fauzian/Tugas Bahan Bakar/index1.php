<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <title>Shell</title>
     <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
          @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

          body {
               font-family: "Poppins", sans-serif;
               margin: 0;
               padding: 0;
               margin-top: 500px;
               background-image: linear-gradient(to bottom right, #D71313, #F8DE22);
               width: 500px;
               height: 720px;
               margin: 50px auto;
          }

          .form-beli {
               margin-bottom: 10px;
               width: 100%;
               max-width: 500px;
               padding-top: 10px;
               padding-left: 1.5em;
               padding-right: 1.5em;
               border-radius: 1rem;
               padding-bottom: 10px;
               border: 0px solid transparent;
               backdrop-filter: blur(100rem);
               box-shadow: 1.1rem 1.1rem 1.1rem rgba(0, 0, 0, 0.3);
               border-top-color: rgba(225, 225, 225, 0.1);
               border-left-color: rgba(225, 225, 225, 0.1);
               border-bottom-color: rgba(225, 225, 225, 0.1);
               border-right-color: rgba(225, 225, 225, 0.1);
          }

          .form-hasil {
               text-align: center;
               width: 100%;
               max-width: 500px;
               padding-left: 1.5em;
               padding-right: 1.5em;
               border-radius: 1rem;
               padding-bottom: 10px;
               border: 0px solid transparent;
               backdrop-filter: blur(100rem);
               box-shadow: 1.1rem 1.1rem 1.1rem rgba(0, 0, 0, 0.3);
               border-top-color: rgba(225, 225, 225, 0.1);
               border-left-color: rgba(225, 225, 225, 0.1);
               border-bottom-color: rgba(225, 225, 225, 0.1);
               border-right-color: rgba(225, 225, 225, 0.1);
          }

          h2 {
               text-align: center;
               color: black;
          }

          label {
               display: block;
               font-weight: bold;
               margin-bottom: 5px;
               color: black;


          }

          input[type="number"],
          select {
               width: 100%;
               padding: 10px;
               margin-bottom: 10px;
               border: 1px solid #ccc;
               border-radius: 5px;
               font-size: 16px;
               background: rgba(255, 255, 255, 0.20);
               border-radius: 16px;
               box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
               backdrop-filter: blur(12.7px);
               -webkit-backdrop-filter: blur(12.7px);
               border: 1px solid rgba(255, 255, 255, 0.13);
          }

          select {
               appearance: none;
               -webkit-appearance: none;
               -moz-appearance: none;
               /* background: url('arrow.png') no-repeat; */
               background-position: 95% center;
               background: rgba(255, 255, 255, 0.20);
          }

          input[type="submit"] {
               background-color: #C70039;
               color: #fff;
               border: none;
               padding: 10px 200px;
               border-radius: 10px;
               font-size: 18px;
               cursor: pointer;
          }

          input[type="submit"]:hover {
               background-color: #BB2525;
          }
     </style>
</head>

<body>


     <div class="form-beli">
          <h2>Pembelian Bahan Bakar</h2>
          <form action="" method="POST">
               <label for="liter">Liter: </label><br>
               <input type="number" id="liter" name="liter">
               <br>
               <br>
               <label for="dropdown">Pilih Varian:</label><br>
               <select id="dropdown" name="dropdown">
                    <?php $s = new Shell();
                    echo $s->option(); ?>
               </select><br><br>
               <input type="submit" value="Bayar" name="terbayar">
          </form>
     </div>

     <?php
     ini_set('display_errors', 'Off');
     ini_set('error_reporting', E_ALL);
     if (isset($_POST['terbayar'])) {
          $banyak = $_POST['liter'];
          $pilihan = $_POST['dropdown'];
          $bayar = new Beli($banyak, $pilihan);
          $total = $bayar->totalBensin();
          $bayar->printNota();
     }
     ?>

     <?php
     class Shell
     {
          public $Shell = [
               [
                    'nama' => 'Shell Super',
                    'harga' => 15420
               ],
               [
                    'nama' => 'Shell V-Power',
                    'harga' => 16130
               ],
               [
                    'nama' => 'Shell V-Power Diesel',
                    'harga' => 18310
               ],
               [
                    'nama' => 'Shell V-Power Nitro',
                    'harga' => 16510
               ]
          ];

          public function option()
          {
               $options = '';

               foreach ($this->Shell as $station) {
                    $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
               }

               return $options;
          }
     }

     class Beli extends Shell
     {
          public $liter;
          public $tipe;
          public $total;

          public function __construct($liter, $tipe)
          {
               $this->tipe = $tipe;
               $this->liter = $liter;
          }

          public function totalBensin()
          {
               foreach ($this->Shell as $station) {
                    if ($station['nama'] === $this->tipe) {
                         $this->total = $station['harga'] * $this->liter;
                         return $this->total;
                    }
               }
          }

          public function printNota()
          {
               echo '<div class="form-hasil">
               <h2>Hasil Pembayaran Bahan Bakar</h2>';
               echo "Anda membeli bahan bakar dengan tipe: " . $this->tipe;
               echo "<br>";
               echo "Dengan Jumlah: " . $this->liter . " Liter";
               echo "<br>";
               echo "Total yang harus dibayar: " . $this->total * 1.1;
               echo " <br></div>";
          }
     }
     ?>

</body>

</html>