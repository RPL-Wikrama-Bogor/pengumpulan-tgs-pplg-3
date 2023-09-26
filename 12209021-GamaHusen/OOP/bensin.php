<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        color: black;
    }

    body {
        background-color: orange;
        font-family: Arial, Helvetica, sans-serif;
    }

    .form-beli {
        width: 535px;
        height: 430px;
        overflow: hidden;
        background-color: #F8DE22;
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 20px;
        margin: 20px auto;
        color: white;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.13);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(3.9px);
        -webkit-backdrop-filter: blur(3.9px);
        border: 1px solid rgba(255, 255, 255, 0.35);
    }

    form {
        margin-top: 50px;
        height: 350px;
    }

    h1 {
        margin: 20px 50px;
    }

    input,
    select {
        margin: 15px 0;
        width: 450px;
        border-radius: 5px;
        border: none;
        height: 40px;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.13);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(3.9px);
        -webkit-backdrop-filter: blur(3.9px);
        border: 1px solid rgba(255, 255, 255, 0.35);
    }

    input[type="number"] {
        height: 25px;
        width: 439px;
        padding: 7px;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.13);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(3.9px);
        -webkit-backdrop-filter: blur(3.9px);
        border: 1px solid rgba(255, 255, 255, 0.35);
    }

    label {
        font-size: 17px;
    }

    input[type="submit"] {
        border-radius: 5px;
        color: white;
        background-color: orangered;
        border: none;
        width: 100px;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.13);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(3.9px);
        -webkit-backdrop-filter: blur(3.9px);
        border: 1px solid rgba(255, 255, 255, 0.35);
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: orangered;
        transition: 1.2s;
    }

    .hasil {
        background-color: #F8DE22;
        width: 535px;
        height: 100px;
        overflow: hidden;
        margin: 10px auto;
        text-align: center;
        border-radius: 20px;
        color: white;
    }
</style>

<body>
    <div class="form-beli">
        <h1>Pembelian Bahan Bakar</h1>
        <form action="" method="POST">
            <label for="liter">Liter: </label><br>
            <input type="number" id="liter" name="liter" required>
            <br>
            <br>
            <label for="dropdown">Pilih Varian:</label><br>
            <select id="dropdown" name="dropdown" required>
                <?php $s = new Shell();
                echo $s->option(); ?>
            </select><br><br>
            <input type="submit" value="Bayar" name="terbayar">
        </form>
    </div>

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

        public function option()
        {
            $options = '';

            foreach ($this->Shell as $station) {
                $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
            }

            return $options;
        }
    }

    class Beli extends Shell
    {
        public $liter;
        public $tipe;
        public $total;

        public function __construct($liter, $tipe)
        {
            $this->tipe = $tipe;
            $this->liter = $liter;
        }

        public function totalBensin()
        {
            foreach ($this->Shell as $station) {
                if ($station['nama'] === $this->tipe) {
                    $this->total = $station['harga'] * $this->liter;
                    return $this->total;
                }
            }
        }

        public function printNota()
        {

            echo '<div class="hasil"><br>';
            echo "Anda membeli bahan bakar dengan tipe: "  . $this->tipe;
            echo "<br>";
            echo "Dengan Jumlah: " . $this->liter . " Liter";
            echo "<br>";
            $bahan_bakar = $this->total * 1.1;
            $bahan_bakar_total = number_format($bahan_bakar, 2);
            echo "Total yang harus dibayar: Rp " . $bahan_bakar_total;
            echo "<br></div>";
        }
    }
    ?>
</body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#F8DE22" fill-opacity="1" d="M0,288L24,266.7C48,245,96,203,144,192C192,181,240,203,288,181.3C336,160,384,96,432,58.7C480,21,528,11,576,53.3C624,96,672,192,720,224C768,256,816,224,864,197.3C912,171,960,149,1008,144C1056,139,1104,149,1152,133.3C1200,117,1248,75,1296,85.3C1344,96,1392,160,1416,192L1440,224L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
</svg>

</html>