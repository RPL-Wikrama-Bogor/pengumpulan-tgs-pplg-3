<?php
class shell{
    public $ppn = 0.10;
    public $jenis = [
        "Shell Super" => 1542000,
        "Shell V-Power" => 1613000,
        "Shell V-Power Diesel" => 1831000,
        "Shell V-Power Nitro" => 1651000
    ];
    public $jumlah;

}

class beli extends shell{
    public function pesanan($jenis, $jumlah, $ppn) {
        if (array_key_exists($jenis, $this->jenis)) {
          $harga = $this->jenis[$jenis];
          $total = $harga * $jumlah * $ppn;
          return "jenis bensin yang dibeli : '$jenis' <br> dan harga bensin '$harga "; 
        }else {
          return "menu '$nama' tidak ditemukan";
        }
      }

    }
    $pombensin  = new beli();
 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
     $bensin = $_POST['jenis'];
     $brpliter = intval($_POST['liter']);
     $pesan = $pombensin->pesanan($bensin,$brpliter);
    }else {
        $pesan = "silahkan pilih menu dan pesan.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hasil Pesanan</h1>
    <p><?php echo $pesan; ?></p>
    <a href="index.php">Kembali ke Menu Utama</a>
</body>
</html>