<?php
class Shell {
    public $harga;
    public $jenis;
    public $jumlah;
    public $ppn = 0.1; // dirubah dari persen ke desimal (10% => 0.1)

    public function __construct($jenis, $jumlah) {
        $this->jenis = $jenis;
        $this->jumlah = $jumlah;

        $hargaBahanBakar = [
            "Shell Super" => 15420,
            "Shell V-Power" => 16130,
            "Shell V-Power Diesel" => 18310,
            "Shell V-Power Nitro" => 16510,
        ];

        if (array_key_exists($jenis, $hargaBahanBakar)) {
            $this->harga = $hargaBahanBakar[$jenis];
        } else {
            die("Tipe bahan bakar tidak valid.");
        }
    }

    public function hitungTotal() {
        $subtotal = $this->harga * $this->jumlah;
        $ppnAmount = $subtotal * $this->ppn;
        $total = $subtotal + $ppnAmount;
        return $total;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bahan Bakar Shell</title>
    <link rel="stylesheet" href="bahanBakar.css">
</head>
<body>
    <h2>Formulir Pembelian Bahan Bakar</h2>
    <form method="post">
    <img src="img/shell.jpg" alt="shell" srcset="">
        <label for="liter">Masukkan Jumlah Liter:</label>
        <input type="text" name="liter" id="liter" required><br><br>

        <label for="jenisBahan">Pilih Tipe Bahan Bakar:</label>
        <select name="jenisBahan" id="jenisBahan" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br><br>

        <input type="submit" name="submit" value="Beli">
    </form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $jenis = $_POST["jenisBahan"];
    $jumlah = $_POST["liter"];

    $transaksi = new Beli($jenis, $jumlah);
    $transaksi->buktiPembayaran();
}

class Beli extends Shell {
    public function buktiPembayaran() {
        $totalBayar = $this->hitungTotal();
        echo '<div class="bukti-transaksi">';
        echo '<h2>Bukti Transaksi Pembelian Bahan Bakar</h2>';
        echo '-----------------------------------------';
        echo "<p>Anda membeli bahan bakar minyak tipe {$this->jenis}.<br><br>";
        echo "Sebanyak {$this->jumlah} liter.</p>";
        echo "<p>Total yang harus Anda bayar: <br> Rp. " . number_format($totalBayar, 2, ',', '.') . "</p>"; 
        echo '-----------------------------------------';
        echo '</div>';
    }
}

?>
