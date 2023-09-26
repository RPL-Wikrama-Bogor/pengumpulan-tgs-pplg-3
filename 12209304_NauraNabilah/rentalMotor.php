<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #E6FFFD;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        margin-bottom: 20px;
    }

    tr {
        height: 40px;
    }

    td {
        padding: 5px;
        vertical-align: middle;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<body>
    <h1>RENTAL MOTOR</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Nama Pelanggan
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>
                    Lama Waktu Rental
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="number" name="waktu" id="waktu">
                </td>
            </tr>
            <tr>
                <td>
                    jenis motor
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="jenis" id="">
                        <option value="Aerox">Aerox</option>
                        <option value="Lexi">Lexi</option>
                        <option value="Beat">Beat</option>
                        <option value="Vario">Vario</option>
                    </select>
                </td>
            </tr>
           <tr>
            <td></td>
            <td></td>
           <td>
                <input type="submit" name="submit" value="submit" style="background-color: #9EDDFF; border-radius : 50px; padding: 16px 32px; margin: 4px 2px; color: #FFFF; margin-left: 50%;">
            </td>
           </tr>
        </table>
    </form>

    <?php


$proces = new Rental();
$proces->setHarga(150000, 175000, 50000, 87000);

if (isset($_POST['submit'])) {
    $proces->namaPelanggan = $_POST['nama'];
    $proces->waktuRental = $_POST['waktu'];
    $proces->motorYangDipilih = $_POST['jenis'];

    $proces->totalHargaRental();
    $proces->hargaDiskon();
    $proces->cetakRental();
}
?>
</body>
</html>

<?php 
    class Motor {
        private $hargaAerox;
        private $hargaLexi;
        private $hargaBeat;
        private $hargaVario;
        private $listMember = ['yusuf', 'noraa', 'fauq', 'parhan'];
        
        public $motorYangDipilih;
        public $waktuRental;
        public $namaPelanggan;
        
        protected $totalPembayaran;
        protected $diskon;

        protected $pajak;

        function __construct() 
        {
            $this->diskon = 0.05;
        }

    
        public function setHarga($Aerox,$Lexi,$Beat,$Vario) {
            $this->hargaAerox = $Aerox;
            $this->hargaLexi = $Lexi;
            $this->hargaBeat = $Beat;
            $this->hargaVario = $Vario;
        }

        public function getlistMember() {
            return $this->listMember;
        }

        public function setListNama($nama) {
            $this->namaPelanggan = $nama;
        }

        public function getListNama() {
            return $this->namaPelanggan;
        }

        public function getHarga(){
            $semuaDataMotor["Aerox"] = $this->hargaAerox;
            $semuaDataMotor["Lexi"] = $this->hargaLexi;
            $semuaDataMotor["Beat"] = $this->hargaBeat;
            $semuaDataMotor["Vario"] = $this->hargaVario;
            return $semuaDataMotor;
        }


    }

    class Rental extends Motor {
        public function totalHargaRental() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            $hargaRental;
            return $hargaRental;
        }

        public function hargaDiskon() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $totalDiskon = $hargaRental - $diskon ;
            return $totalDiskon;
        }

        public function cetakRental() {
            $hargaMotor = $this->getHarga();

            if (in_array($this->getListNama(), $this->getlistMember())) {
                echo "<center>----------------------------------------------- <br>";
                echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
                echo "Jenis Motor Yang Disewa: " .($this->motorYangDipilih) . "<br>";
                echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
                echo "Waktu Peminjaman : " .$this->waktuRental ."hari". "<br>";
                echo "Mendapatkan Diskon Sebesar 5% <br>";
                echo "Total Harga Yang Harus Dibayar Setelah Diskon yaitu Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
                echo "-----------------------------------------------</center> <br>";
        } else {
            echo "<center>----------------------------------------------- <br>";
            echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
            echo "Jenis Motor Yang Disewa: " .($this->motorYangDipilih) . "<br>";
            echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
            echo "Waktu Peminjaman " .$this->waktuRental . " ". "hari" . "<br>";
            echo "Tidak ada Diskon, anda bukan Member <br>";
            echo "Total Harga Yang Harus Dibayar yaitu Rp. " . number_format($this->totalHargaRental(), 0, ',', '.') . "<br>";
            echo "-----------------------------------------------</center><br>";
        }

    }
}
?>