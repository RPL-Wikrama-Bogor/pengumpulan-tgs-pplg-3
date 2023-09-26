<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Comfortaa&family=Gluten&family=Nunito:wght@600&family=Sedgwick+Ave+Display&display=swap');
        body {
            font-family: 'Comfortaa', cursive;
            background-color: #f0f0f0;
            margin: 140px;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-family: 'Comfortaa', cursive;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-family: 'Comfortaa', cursive;
        }
        button:hover {
            background-color: #0056b3;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rental Motor</h1>
        <form action="" method="post">
            <label for="nama">Masukkan Nama Anda :</label>
            <input type="text" name="nama" id="nama" autocomplete="off" required>
            
            <label for="waktu">Lama Waktu Rental (Per Hari) :</label>
            <input type="number" min="0" name="waktu" id="waktu" required>
            
            <label for="jenis">Jenis Motor :</label>
            <select name="jenis" required>
                <option hidden disabled selected>Pilih Jenis Motor</option>
                <option value="Scooter">Scooter</option>
                <option value="Aerox">Aerox</option>
                <option value="Vario">Vario</option>
                <option value="Beat">Beat</option>
            </select>
            <button type="submit" name="rental">Rental Motor</button>
        </form>
            <br>
        <?php
        if(isset($_POST['rental'])) {
            class DataMotor {
                private $hargaScooter;
                private $hargaAerox;
                private $hargaVario;
                private $hargaBeat;
                private $listVIP = ['naufal'];
            
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
                public function setHarga($Scooter, $Aerox, $Vario, $Beat) {
                    $this->hargaScooter = $Scooter;
                    $this->hargaAerox = $Aerox;
                    $this->hargaVario = $Vario;
                    $this->hargaBeat = $Beat;
                }
            
                public function getListVIP() {
                    return $this->listVIP;
                }
            
                public function setListName($nama){
                    $this->nama_pengguna = $nama;
                }
            
                public function getListName(){
                    return $this->nama_pengguna;
                }
            
                public function getHarga() {
                    $semuaDataMotor["Scooter"] = $this->hargaScooter;
                    $semuaDataMotor["Aerox"] = $this->hargaAerox;
                    $semuaDataMotor["Vario"] = $this->hargaVario;
                    $semuaDataMotor["Beat"] = $this->hargaBeat;
                    return $semuaDataMotor;
                }
            }
            
            class Pembelian extends DataMotor {
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
                        echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
                        echo "Total Bayaran Setelah Diskon: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
                    } else {
                        echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";
                        echo "Jenis Motor: " . ucfirst($this->jenisYangDipilih) . "<br>";
                        echo "Harga Motor per Hari: Rp " . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . "<br>";
                        echo "Lama Peminjaman (Hari) : " . $this->lamaWaktu . "<br>";
                        echo "Anda Tidak Mendapatkan Diskon Karena Bukan Membership <br>";
                        echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
                        echo "Total Bayaran : Rp. " . number_format($this->hargaRental(), 0, ',', '.') . "<br>";
                    }
                }
            }

            $logic = new Pembelian();
            $logic->setHarga(70000, 85000, 82000, 80000);
            $logic->nama_pengguna = $_POST['nama'];
            $logic->lamaWaktu = $_POST['waktu'];
            $logic->jenisYangDipilih = $_POST['jenis'];
            $logic->cetakBukti();
        }
        ?>
    </div>
</body>
</html>
