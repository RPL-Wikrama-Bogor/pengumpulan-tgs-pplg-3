<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Pembelian Produk Shell</title>
</head>

<body>
    <h1>Form Pembelian Produk Shell</h1>
    <form action="" method="post">
        <label for="jenisBensin">Jenis Produk:</label>
        <select name="jenis" id="jenis">
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>
        <label for="jumlahLiter">Jumlah Liter:</label>
        <input type="number" name="jumlah" id="jumlah" required><br>
        <input type="submit" value="Hitung Total" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $jenisBensin = $_POST['jenis'];
    $jumlahLiter = $_POST['jumlah'];

    class Shell
    {
        public $harga = array(
            "Shell Super" => 15420,
            "Shell V-Power" => 16130,
            "Shell V-Power Diesel" => 18310,
            "Shell V-Power Nitro" => 16510
        );
    }

    class Beli extends Shell
    {
        public $ppn = 0.10;
        public $jumlahLiter;
        public $jenisBensin;
        public $total_bayar;

        public function __construct($jumlahLiter, $jenisBensin)
        {
            $this->jumlahLiter = $jumlahLiter;
            $this->jenisBensin = $jenisBensin;
        }

        public function Hitung()
        {
            $harga_bensin = $this->harga[$this->jenisBensin];
            $total = $harga_bensin * $this->jumlahLiter;
            $total_ppn = $total * $this->ppn;
            $this->total_bayar = $total + $total_ppn;
        }
    }

    $pembelian = new Beli($jumlahLiter, $jenisBensin);
    $pembelian->Hitung();

    echo '<div class="result">';
    echo '<h2>Struk Pembelian</h2>';
    echo '<div class="struk">';
    echo '<label>Jenis Produk:  <span class = "hasil">'. $pembelian->jenisBensin . '</span></label>';
    echo '<label>Jumlah Liter: <span class = "hasil">' . $pembelian->jumlahLiter . '</span></label>';
    echo '<label>Total Bayar: ' . number_format($pembelian->total_bayar, 2) . '</label>';
    echo '</div>';
    echo '</div>';
}
?>