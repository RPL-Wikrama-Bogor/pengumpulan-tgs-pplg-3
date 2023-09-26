<?php
class Shell
{
    const SHELL_SUPER_PRICE = 15420;
    const SHELL_V_POWER_PRICE = 16130;
    const SHELL_V_POWER_DIESEL_PRICE = 18310;
    const SHELL_V_POWER_NITRO_PRICE = 16510;
}

class Beli extends Shell
{
    private $jenisBensin;
    private $jumlahLiter;
    
    public function __construct($jenisBensin, $jumlahLiter)
    {
        $this->jenisBensin = $jenisBensin;
        $this->jumlahLiter = $jumlahLiter;
    }

    public function hitungHargaTotal()
    {
        $hargaPerLiter = $this->getHargaBensin();
        $subtotal = $hargaPerLiter * $this->jumlahLiter;
        $ppn = $subtotal * 0.10; // PPN 10%
        $totalHarga = $subtotal + $ppn;
        return $totalHarga;
    }

    private function getHargaBensin()
    {
        switch ($this->jenisBensin) {
            case 'Super':
                return self::SHELL_SUPER_PRICE;
            case 'V-Power':
                return self::SHELL_V_POWER_PRICE;
            case 'V-Power Diesel':
                return self::SHELL_V_POWER_DIESEL_PRICE;
            case 'V-Power Nitro':
                return self::SHELL_V_POWER_NITRO_PRICE;
            default:
                return 0;
        }
    }
}

// Proses input dari form HTML
if (isset($_POST['submit'])) {
    $jenisBensin = $_POST['jenis_bensin'];
    $jumlahLiter = $_POST['jumlah_liter'];

    // Membuat objek Beli
    $pembelian = new Beli($jenisBensin, $jumlahLiter);

    // Menghitung total harga
    $totalHarga = $pembelian->hitungHargaTotal();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Pembayaran Bensin</title>
</head>
<body>
    <h1>Program Pembayaran Bensin</h1>
    <form method="post" action="">
        <label for="jenis_bensin">Jenis Bensin:</label>
        <select name="jenis_bensin" id="jenis_bensin">
            <option value="Super">Shell Super</option>
            <option value="V-Power">Shell V-Power</option>
            <option value="V-Power Diesel">Shell V-Power Diesel</option>
            <option value="V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <label for="jumlah_liter">Jumlah Liter:</label>
        <input type="number" name="jumlah_liter" id="jumlah_liter" required><br>

        <input type="submit" name="submit" value="Hitung Total Harga">
    </form>

    <?php
    if (isset($totalHarga)) {
        echo "<h2>Hasil Pembelian</h2>";
        echo "Jenis Bensin: $jenisBensin<br>";
        echo "Jumlah Liter: $jumlahLiter liter<br>";
        echo "Total Harga (termasuk PPN 10%): Rp. " . number_format($totalHarga, 2, ',', '.');
    }
    ?>
</body>
</html>