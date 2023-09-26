<?php
class Shell {
    public $jenis;
    public $harga;
    public $ppn;
    public $jumlah;

    public function __construct($jenis, $harga, $ppn) {
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->ppn = $ppn;
        $this->jumlah = 0;
    }

    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }

    public function totalHarga() {
        return ($this->harga * $this->jumlah) + ($this->harga * $this->jumlah * $this->ppn / 100);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis = $_POST["jenis"];
    $jumlah = $_POST["jumlah"];

    $hargaShellSuper = 15420.00;
    $hargaShellVPower = 16130.00;
    $hargaShellVPowerDiesel = 18310.00;
    $hargaShellVPowerNitro = 16510.00;

    $ppn = 10;

    $beli = new Shell($jenis, $hargaShellSuper, $ppn);
    $beli->setJumlah($jumlah);

    $hasilTransaksi = $beli->totalHarga();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hasil Transaksi</title>
</head>
<body>
    <div class="container">
        <h1>Hasil Transaksi</h1>
        <h2>Anda telah membeli:</h2>
        <p><?= $jenis ?></p>
        <h2>Total Harga:</h2>
        <p>Rp. <?= number_format($hasilTransaksi, 2) ?></p>
    </div>
</body>
</html>
