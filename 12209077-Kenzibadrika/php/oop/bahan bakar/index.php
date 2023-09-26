<?php

class Shell {
    public $jenis;
    public $harga;
    public $ppn;

    public function __construct($jenis, $harga, $ppn) {
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->ppn = $ppn;
    }
}

class Beli extends Shell {
    public $jumlah;

    public function __construct($jenis, $harga, $ppn, $jumlah) {
        parent::__construct($jenis, $harga, $ppn);
        $this->jumlah = $jumlah;
    }

    public function totalHarga() {
        $subtotal = $this->harga * $this->jumlah;
        $total = $subtotal + ($subtotal * $this->ppn / 100);
        return $total;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenisBahanBakar = $_POST['jenis_bahan_bakar'];
    $jumlahLiter = $_POST['jumlah_liter'];

    $harga = [
        "Shell Super" => 15420,
        "Shell V-Power" => 16130,
        "Shell V-Power Diesel" => 18310,
        "Shell V-Power Nitro" => 16510
    ];

    if (!array_key_exists($jenisBahanBakar, $harga)) {
        echo "Jenis bahan bakar tidak valid.";
        exit();
    }

    $pembelian = new Beli($jenisBahanBakar, $harga[$jenisBahanBakar], 10, $jumlahLiter);

    $hasilPembelian = "
    Anda membeli bahan bakar minyak tipe {$pembelian->jenis} <br>
    Dengan jumlah: {$pembelian->jumlah} Liter <br>
    Total yang harus Anda bayar Rp. " . number_format($pembelian->totalHarga(), 2);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Bahan Bakar</title>
</head>
<body>
    
        <h1>pembelian bahan bakar minyak</h1>
        <?php if(isset($hasilPembelian)) : ?>
            <p>================================================</p>
            <h2>Hasil Transaksi:</h2>
            <p><?php echo $hasilPembelian; ?></p>
            <p>================================================</p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="jumlah_liter">Masukkan Jumlah Liter:</label>
            <input type="number" id="jumlah_liter" name="jumlah_liter" required value="1"><br><br>

            <label for="jenis_bahan_bakar">Pilih Tipe Bahan Bakar:</label>
            <select id="jenis_bahan_bakar" name="jenis_bahan_bakar">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br><br>
            <?php if(isset($hasilPembelian)) : ?>
            <a href="index.php">kembali</a>
            <?php else: ?>
                <input type="submit" value="Beli">
            <?php endif ; ?>

        </form>
   
</body>
</html>