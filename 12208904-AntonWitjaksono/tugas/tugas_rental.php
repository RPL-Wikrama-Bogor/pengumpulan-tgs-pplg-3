<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Sewa Motor</title>
</head>
<style>
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

</style>
<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="nama">Masukkan Nama Anda:</label>
            <input type="text" name="nama" id="nama" required autocomplete="off">
        </div>
        <div style="display: flex;">
            <label for="waktu">Lama Waktu Rental(per Hari):</label>
            <input type="number" min="0" name="waktu" id="waktu" required>
        </div>
        <div style="display: flex;">
            <label for="jenis">Jenis Motor:</label>
            <select name="jenis" required>
                <option hidden disabled selected>Pilih Jenis Motor</option>
                <option value="Scooter">Scooter</option>
                <option value="Aerox">Aerox</option>
                <option value="Vario">Vario</option>
                <option value="PCX">PCX</option>
                <option value="Vespa">Vespa</option>
            </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>

    <?php
    ini_set('display_errors','Off');

    $data = new Pembelian();
    $data->setHarga(50000,125000,80000,150000,150000);
    if(isset($_POST['sewa'])) {
        $data->nama_pengguna = $_POST['nama'];
        $data->lama_waktu = $_POST['waktu'];
        $data->jenis_motor = $_POST['jenis'];
        $data->cetakBukti();

    }
    
    class DataMotor 
    // membuat objek kelas pembelian
    {
        private $hargaScooter;
        private $hargaAerox;
        private $hargaVario;
        private $hargaPCX;
        private $hargaVespa;
        private $listVIP = ['Bahtiar', 'Fahrel', 'Gama', 'Anton'];
    
        public $jenis_motor;
        public $lama_waktu;
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
        public function setHarga($Scooter, $Aerox, $Vario, $PCX, $Vespa) {
            $this->hargaScooter = $Scooter;
            $this->hargaAerox = $Aerox;
            $this->hargaVario = $Vario;
            $this->hargaPCX = $PCX;
            $this->hargaVespa = $Vespa;
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
            $semuaDataMotor["PCX"] = $this->hargaPCX;
            $semuaDataMotor["Vespa"] = $this->hargaVespa;
            return $semuaDataMotor;
        }
    }
    
    class Pembelian extends DataMotor {
        public function harga_rental()
        {
            $harga_motor = $this->getHarga();
            $harga_rental = $this->lama_waktu * $harga_motor[$this->jenis_motor];
            $harga_rental = $harga_rental + $this->pajak;
            return $harga_rental;
        }
    
        public function hargaDiskon()
        {
            $harga_motor = $this->getHarga();
            $harga_rental = $this->lama_waktu * $harga_motor[$this->jenis_motor];
            $diskon = $harga_rental * $this->diskon;
            $hargaTotalDiskon = $harga_rental + $this->pajak - $diskon;
            return $hargaTotalDiskon;
        }
    
        public function cetakBukti() 
        {
            $harga_motor = $this->getHarga();
    
            if (in_array($this->getListName(), $this->getListVIP())) {
                echo "<br>";
                echo "<br>";
                echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";
                echo "Jenis Motor yang Disewa: " . ucfirst($this->jenis_motor) . "<br>";
                echo "Harga Motor per Hari: Rp " . number_format($harga_motor[$this->jenis_motor], 0, ',', '.') . "<br>";
                echo "Lama Peminjaman (Hari) : " . $this->lama_waktu . "<br>";
                echo "Mendapatkan Diskon Sebesar : 5% <br>";
                echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
                echo "Total Bayaran Setelah Diskon: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
            } else {
                echo "<br>";
                echo "<br>";
                echo "Nama Penyewa: " . ucfirst($this->getListName()) . "<br>";
                echo "Jenis Motor: " . ucfirst($this->jenis_motor) . "<br>";
                echo "Harga Motor per Hari: Rp " . number_format($harga_motor[$this->jenis_motor], 0, ',', '.') . "<br>";
                echo "Lama Peminjaman (Hari) : " . $this->lama_waktu . "<br>";
                echo "Anda Tidak Mendapatkan Diskon Karena Bukan Membership <br>";
                echo "Pajak : Rp. " . number_format($this->pajak, 0, ',', '.'). "<br>";
                echo "Total Bayaran : Rp. " . number_format($this->harga_rental(), 0, ',', '.') . "<br>";
            }
        }
    }
    ?>
    </form>

</body>

</html>