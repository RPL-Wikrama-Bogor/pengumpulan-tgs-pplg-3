<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Shell</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

.form-beli {
    max-width: 490px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-beli h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-beli label {
    display: block;
    margin-bottom: 5px;
}

.form-beli input[type="number"], .form-beli select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.form-beli input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

.form-beli input[type="submit"]:hover {
    background-color: #45a049;
}

.card {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card h3 {
    margin-bottom: 10px;
}

.card p {
    margin-bottom: 10px;
}

.card hr {
    border: 0;
    border-top: 1px solid #ccc;
    margin-bottom: 10px;
}


</style>
<body>
<div class="form-beli">
    <h2>Pembelian Bahan Bakar</h2>
<form action="" method="POST">
    <label for="liter" >Liter: </label><br>
    <input type="number" id="liter" name="liter" required>
    <br>
    <br>
    <label for="dropdown">Pilih Varian:</label><br>
    <select id="dropdown" name="dropdown">
        <?php $s = new Shell(); echo $s->option(); ?>
    </select><br><br>
    <input type="submit" value="Bayar" name="terbayar">
</form>

<?php
if (isset($_POST['terbayar'])) {
    $banyak = $_POST['liter'];
    $pilihan = $_POST['dropdown'];
    $bayar = new Beli($banyak, $pilihan);
    $total = $bayar->totalBensin();
    $bayar->printNota();
}
?>

<?php
class Shell
{
    public $Shell = [
        [
            'Nama' => 'Shell Super',
            'Harga' => 15420
        ],
        [
            'Nama' => 'Shell V-Power',
            'Harga' => 16130
        ],
        [
            'Nama' => 'Shell V-Power Diesel',
            'Harga' => 18310
        ],
        [
            'Nama' => 'Shell V-Power Nitro',
            'Harga' => 16510
        ]
    ];

    public function option() {
        $options = '';

        foreach ($this->Shell as $station) {
            $options .= '<option value="' . $station['Nama'] . '">' . $station['Nama'] . '</option>';
        }
        
        return $options;
    }
}
class Beli extends Shell {
    public $liter;
    public $tipe;
    public $total;
    
    public function __construct($liter, $tipe) {
        $this->tipe = $tipe;
        $this->liter = $liter;
    }
    
    public function totalBensin() {
        foreach ($this->Shell as $station) {
            if ($station['Nama'] === $this->tipe) {
                $this->total = $station['Harga'] * $this->liter;
                return $this->total;
            }
        }
    }
    public function printNota() {
        echo "<br>";
        echo "Anda membeli bahan bakar dengan tipe: " . $this->tipe;
        echo "<br>";
        echo "Dengan Jumlah: " . $this->liter . " Liter";
        echo "<br>";
        echo "Total yang harus dibayar : Rp. " . number_format($this->total * 1.1, 2, ',','.', );
        echo "<br>";

    }
}
?>
</div>
</body>
</html>