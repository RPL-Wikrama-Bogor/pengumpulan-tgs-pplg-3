<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Rental Dan Sewa Motor</title>
     <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
          @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

          body {
               font-family: "Poppins", sans-serif;
               margin: 0;
               padding: 0;
               margin-top: 500px;
               background-image: linear-gradient(to bottom right, lightblue, pink);
               width: 600px;
               height: 720px;
               margin: 50px auto;
          }

          h1 {
               text-align: center;
          }

          /* Basic styling for the form container */
          .card {
               max-width: 500px;
               margin: 0 auto;
               padding: 20px;
               border: 1px solid #ccc;
               border-radius: 5px;
               box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
               margin-bottom: 20px;
          }

          /* Styling for form labels */
          label {
               flex: 1;
               margin-right: 10px;
          }

          /* Styling for form inputs */
          input[type="text"],
          input[type="number"],
          select {
               flex: 1.5;
               padding: 10px;
               margin-bottom: 10px;
               border: 1px solid #ccc;
               border-radius: 10px;
               background: rgba(255, 255, 255, 0.22);
               border-radius: 16px;
               box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
               backdrop-filter: blur(8.4px);
               -webkit-backdrop-filter: blur(8.4px);
          }

          /* Styling for the submit button */
          button[type="submit"] {
               background-color: #007BFF;
               color: white;
               border: none;
               padding: 10px 209px;
               border-radius: 10px;
               cursor: pointer;
          }

          /* Styling for the submit button on hover */
          button[type="submit"]:hover {
               background-color: #0056b3;
          }
     </style>
</head>

<body>
     <div class="card">
          <form action="" method="post">
               <h1>Rental Sewa Motor</h1>
               <div style="display: flex;">
                    <label for="nama">Masukan Nama Anda : </label>
                    <input autofocus placeholder="Masukan Nama Anda.." type="text" name="nama" id="nama">
               </div>
               <div style="display: flex;">
                    <label for="waktu">Lama Waktu Rental : </label>
                    <input autofocus placeholder="Lama Waktu Rental.." type="number" name="waktu" id="waktu">
               </div>
               <div style="display: flex;">
                    <label for="jenis">Jenis Motor : </label>
                    <select name="jenis" require>
                         <option hidden disabled selected>Pilih Jenis Motor</option>
                         <option value="Scooter">Scooter</option>
                         <option value="Aerox">Aerox</option>
                         <option value="Vario">Vario</option>
                    </select>
               </div>
               <button type="submit" name="sewa">Sewa Motor</button>
               <?php
               ini_set('display_errors', 'Off');
               ini_set('error_reporting', E_ALL);
               class DataMotor
               // membuat objek kelas pembelian
               {
                    private $hargaScooter;
                    private $hargaAerox;
                    private $hargaVario;
                    private $listVIP = ['Fajar Fauzian', 'Gama Husen', 'Anton Witjaksono'];

                    public $jenisYangDipilih;
                    public $lamaWaktu;
                    public $nama_pengguna;

                    protected $totalPembayaran;
                    protected $diskon;

                    protected $pajak;

                    function __construct()
                    {
                         $this->diskon = 0.05;
                         $this->pajak = 10000;
                    }

                    // mengatur harga motor-motor yang disewakan    
                    public function setHarga($Scooter, $Aerox, $Vario)
                    {
                         $this->hargaScooter = $Scooter;
                         $this->hargaAerox = $Aerox;
                         $this->hargaVario = $Vario;
                    }

                    public function getListVIP()
                    {
                         return $this->listVIP;
                    }

                    public function setListName($nama)
                    {
                         $this->nama_pengguna = $nama;
                    }

                    public function getListName()
                    {
                         return $this->nama_pengguna;
                    }

                    public function getHarga()
                    {
                         $semuaDataMotor["Scooter"] = $this->hargaScooter;
                         $semuaDataMotor["Aerox"] = $this->hargaAerox;
                         $semuaDataMotor["Vario"] = $this->hargaVario;
                         return $semuaDataMotor;
                    }
               }

               class Pembelian extends DataMotor
               {
                    public function hargaRental()
                    {
                         $dataHargaMotor = $this->getHarga();
                         $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih];
                         $hargaRental = $hargaRental + $this->pajak;
                         return $hargaRental;
                    }

                    public function hargaDiskon()
                    {
                         $dataHargaMotor = $this->getHarga();
                         $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih];
                         $diskon = $hargaRental * $this->diskon;
                         $hargaTotalDiskon = $hargaRental + $this->pajak - $diskon;
                         return $hargaTotalDiskon;
                    }

                    public function cetakBukti()
                    {
                         $dataHargaMotor = $this->getHarga();

                         if (in_array($this->getListName(), $this->getListVIP())) {

                              echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";

                              echo "Jenis Motor yang Disewa: " . ucfirst($this->jenisYangDipilih) . "<br>";

                              echo "Harga Motor per Hari: Rp " . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . "<br>";

                              echo "Lama Peminjaman (Hari) : " . $this->lamaWaktu . "<br>";

                              echo "Mendapatkan Diskon Sebesar : 5% <br>";

                              echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.') . "<br>";

                              echo "Total Bayaran Setelah Diskon: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
                         } else {

                              echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";

                              echo "Jenis Motor: " . ucfirst($this->jenisYangDipilih) . "<br>";

                              echo "Harga Motor per Hari: Rp " . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . "<br>";

                              echo "Lama Peminjaman (Hari) : " . $this->lamaWaktu . "<br>";

                              echo "Anda Tidak Mendapatkan Diskon Karena Bukan Membership <br>";

                              echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.') . "<br>";

                              echo "Total Bayaran : Rp. " . number_format($this->hargaRental(), 0, ',', '.') . "<br>";
                         }
                    }
               }
               ?>
          </form>
          <?php
          $logic = new Pembelian();
          $logic->setHarga(70000, 85000, 82000);
          if (isset($_POST['sewa'])) {
               if (isset($_POST["jenis"]) && is_string($_POST["jenis"])) {
                    $logic->nama_pengguna = $_POST['nama'];
                    $logic->lamaWaktu = $_POST['waktu'];
                    $logic->jenisYangDipilih = $_POST['jenis'];

                    $logic->cetakBukti();
               } else {
                    echo "<script>alert('Pilih Dulu Dong Motornya!!'); document.location.href = 'index.php';</script>";
               }
          }
          ?>

     </div>
</body>

</html>