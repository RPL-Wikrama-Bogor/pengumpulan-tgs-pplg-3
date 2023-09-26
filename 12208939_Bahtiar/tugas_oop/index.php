<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shell</title>
</head>
<body>

<div class="form">
<div class="form-beli">
    <h2>Pembelian Bahan Bakar</h2>
<form action="" method="POST">
    <label for="liter">Liter: </label><br>
    <input type="number" id="liter" name="liter" required>
    <br>
    <br>
    <label for="dropdown">Pilih Varian:</label><br>
    <select id="dropdown" name="dropdown" required>
        <?php $s = new Shell(); echo $s->option(); ?>
    </select><br><br>
    <input type="submit" value="Bayar" name="terbayar">
</form>
</div>


<div class="form-hasil">
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
            'nama' => 'Shell Super',
            'harga' => 15420
        ],
        [
            'nama' => 'Shell V-Power',
            'harga' => 16130
        ],
        [
            'nama' => 'Shell V-Power Diesel',
            'harga' => 18310
        ],
        [
            'nama' => 'Shell V-Power Nitro',
            'harga' => 16510
        ]
    ];

    public function option() {
        $options = '';

        foreach ($this->Shell as $station) {
            $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
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
            if ($station['nama'] === $this->tipe) {
                $this->total = $station['harga'] * $this->liter;
                return $this->total;
            }
        }
    }

    public function printNota() {
        echo "<h3>Hasil pembelian bahan bakar</h3>";
        echo "<br>";
        echo "Anda membeli bahan bakar dengan tipe: " . $this->tipe;
        echo "<br>";
        echo "Dengan Jumlah: " . $this->liter . " Liter";
        echo "<br>";
        echo "Total yang harus dibayar: " . number_format($this->total * 1.1, 2, ',', '.');
        echo "<br>";
    }
}
?>
</div>
</div>

</body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F8DE22" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,229.3C384,235,480,277,576,277.3C672,277,768,235,864,234.7C960,235,
1056,277,1152,250.7C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,
320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</html>