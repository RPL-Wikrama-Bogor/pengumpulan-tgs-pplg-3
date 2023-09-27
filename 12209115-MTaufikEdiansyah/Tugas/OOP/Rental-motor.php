<?php
class DataMotor 
{
    private $hargaZx25R;
    private $hargaH2;
    private $hargaVario;
    private $hargaNmax;
    private $listVIP = ['Taufik'];

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


    public function setHarga($Zx25R, $H2, $Vario, $Nmax) {
        $this->hargaZx25R = $Zx25R;
        $this->hargaH2 = $H2;
        $this->hargaVario = $Vario;
        $this->hargaNmax = $Nmax;
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
        $semuaDataMotor["Zx25R"] = $this->hargaZx25R;
        $semuaDataMotor["H2"] = $this->hargaH2;
        $semuaDataMotor["Vario"] = $this->hargaVario;
        $semuaDataMotor["Nmax"] = $this->hargaNmax;
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
            echo"<br>";
            echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";
            echo "Jenis Motor yang Disewa: " . ucfirst($this->jenisYangDipilih) . "<br>";
            echo "Harga Motor per Hari: Rp " . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . "<br>";
            echo "Lama Peminjaman (Hari) : " . $this->lamaWaktu . "<br>";
            echo "Mendapatkan Diskon Sebesar : 5% <br>";
            echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
            echo "Total Bayaran Setelah Diskon: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
            echo"<br>";
        } else {
            echo"<br>";
            echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";
            echo "Jenis Motor: " . ucfirst($this->jenisYangDipilih) . "<br>";
            echo "Harga Motor per Hari: Rp " . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . "<br>";
            echo "Lama Peminjaman (Hari) : " . $this->lamaWaktu . "<br>";
            echo "Anda Tidak Mendapatkan Diskon Karena Bukan Membership <br>";
            echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
            echo "Total Bayaran : Rp. " . number_format($this->hargaRental(), 0, ',', '.') . "<br>";
            echo"<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .cart {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .output-container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 1em;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1em;
            background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="cart">
        <form action="" method="post">
            <div style="display: flex;">
                <label for="nama">Masukkan Nama Anda:</label><br>
                <input type="text" name="nama" id="nama" autocomplete="off" required>
            </div>
            <div style="display: flex;">
                <label for="waktu">Lama Waktu Rental(per Hari):</label><br>
                <input type="number" min="0" name="waktu" id="waktu" required>
            </div>
            <div style="display: flex;">
                <label for="jenis">Jenis Motor:</label><br>
                <select name="jenis" required>
                    <option hidden disabled selected>Pilih Jenis Motor</option>
                    <option value="Zx25R">Zx25R</option>
                    <option value="H2">H2</option>
                    <option value="Vario">Vario</option>
                    <option value="Nmax">Nmax</option>
                </select>
            </div>
            <button type="submit" name="sewa">Sewa Motor</button>
        </form>
    </div>
    
        <div class="output">
            <?php
            $logic = new Pembelian();
            $logic->setHarga(1500000,1700000,350000,450000);
            if(isset($_POST['sewa'])) {
                $logic->nama_pengguna = $_POST['nama'];
                $logic->lamaWaktu = $_POST['waktu'];
                $logic->jenisYangDipilih = $_POST['jenis'];
                $logic->cetakBukti();
            }
            ?>
    </div>
</body>
</html>

