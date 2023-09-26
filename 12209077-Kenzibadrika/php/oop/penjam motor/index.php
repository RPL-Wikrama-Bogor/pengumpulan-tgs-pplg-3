
<?php
class DataMotor
// membuat objek kelas pembelian
{
     private $hargaPino;
     private $hargaAerox;
     private $hargaVario;
     private $listVIP = ['Kenzi Badrika', 'Bintang Ardhian', 'Reyfal Meibiansyah'];

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
     public function setHarga($Pino, $Aerox, $Vario)
     {
          $this->hargaPino = $Pino;
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
          $semuaDataMotor["Pino"] = $this->hargaPino;
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

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Rental Dan Sewa Motor</title>
     <style>
          /* Basic styling for the form container */
          .card {
               max-width: 500px;
               margin: 0 auto;
               padding: 20px;
               border: 1px solid #ccc;
               border-radius: 5px;
               box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
               flex: 2;
               padding: 10px;
               margin-bottom: 10px;
               border: 1px solid #ccc;
               border-radius: 3px;
          }

          /* Styling for the submit button */
          button[type="submit"] {
               background-color: #007BFF;
               color: white;
               border: none;
               padding: 10px 20px;
               border-radius: 3px;
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
               <div style="display: flex;">
                    <label for="nama">Masukan Nama Anda : </label>
                    <input autofocus placeholder="Masukan Nama Anda.." type="text" name="nama" id="nama" required>
               </div>
               <div style="display: flex;">
                    <label for="waktu">Lama Waktu Rental : </label>
                    <input autofocus placeholder="Lama Waktu Rental.." type="number" name="waktu" id="waktu" required> 
               </div>
               <div style="display: flex;">
                    <label for="jenis" >Jenis Motor : </label>
                    <select name="jenis" require>
                         <option hidden disabled selected>Pilih Jenis Motor</option>
                         <option value="Pino">Pino</option>
                         <option value="Aerox">Aerox</option>
                         <option value="Vario">Vario</option>
                    </select>
               </div>
               <button type="submit" name="sewa">Sewa Motor</button>
          </form>

          <?php
          $logic = new Pembelian();
          $logic->setHarga(70000, 85000, 82000);
          if (isset($_POST['sewa'])) {
               $logic->nama_pengguna = $_POST['nama'];
               $logic->lamaWaktu = $_POST['waktu'];
               $logic->jenisYangDipilih = $_POST['jenis'];

               $logic->cetakBukti();
          }
          ?>

     </div>
</body>
</html>