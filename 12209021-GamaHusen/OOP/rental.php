<?php
class Rental
{
    private  $lamawaktuRental, $nama_pelanggan, $jenisMotor;

    private $data_VIP = array('Gama Husen', 'Anton Witcaksono', 'Bahtiar Abdul Azis', 'Fajar Fauzian', 'Fahrel Rhozian Ikhrodi Pratama');


    public function dataInput($lamawaktuRental, $jenisMotor, $nama_pelanggan,)
    {
        $this->lamawaktuRental = $lamawaktuRental;
        $this->jenisMotor = $jenisMotor;
        $this->nama_pelanggan = $nama_pelanggan;
    }

    public function getPelanggan()
    {
        return $this->nama_pelanggan;
    }

    public function getjenisMotor()
    {
        return $this->jenisMotor;
    }

    public function getHarga()
    {
        return $this->lamawaktuRental * 150000;
    }

    public function getWaktu(){
        return $this->lamawaktuRental;
    }

    public function getDiskon()
    {
        if (in_array($this->nama_pelanggan, $this->data_VIP)) {
            return  $this->lamawaktuRental * $harga_potongan = (150000 * 25) / 100;
        } 
    }

    public function totHarga(){
        $harga = 150000;
        return $harga_total = $this->lamawaktuRental*$harga-$this->getDiskon();;
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: black;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }

        form {
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .result h2{
            margin-bottom: 20px;
        }

        .result img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Rental Motor</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="pelanggan">Nama Pelanggan:</label>
                    <input type="text" name="nama_pelanggan" id="pelanggan" required>
                </li>
                <li>
                    <label for="lama_waktu">Lama waktu rental (per Hari):</label>
                    <input type="text" name="lama_waktu" id="lama_waktu" required>
                </li>
                <li>
                    <label for="jenis_motor">Jenis Motor:</label>
                    <select name="jenis_motor" id="jenis_motor" require`d>
                        <option value="">Pilih Jenis Motor</option>
                        <option value="NMAX">NMAX</option>
                        <option value="AEROX">AEROX</option>
                        <option value="PCX">PCX</option>
                        <option value="ZX25R">ZX25R</option>
                        <option value="BEAT">BEAT</option>
                        <option value="CBR">CBR</option>
                    </select>
                </li>
                <li>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            $nama_pelanggan = $_POST["nama_pelanggan"];
            $lama_waktu = $_POST["lama_waktu"];
            $jenis_motor = $_POST["jenis_motor"];

            $cetakPelanggan = new Rental();
            $cetakPelanggan->dataInput($lama_waktu, $jenis_motor, $nama_pelanggan);

            echo '<div class="result">';
            echo '<h2>Hasil Rental</h2>';
            echo '<p>Nama Pelanggan: ' . $cetakPelanggan->getPelanggan() . '</p>';
            echo '<p>Jenis Motor: ' . $cetakPelanggan->getjenisMotor() . '</p>';
            echo '<p>Waktu Rental: : ' . $cetakPelanggan->getWaktu() . ' Hari</p>';
            echo '<p>Harga sebelum diskon: Rp. ' . number_format($cetakPelanggan->getHarga(), 0, ',', '.') . '</p>';
            echo '<p>Harga diskon: ';
            if (!$cetakPelanggan->getDiskon()) {
                echo "Anda tidak mendapatkan diskon karna bukan VIP!!";
            } else {
                echo "Rp" . number_format($cetakPelanggan->getDiskon(), 0, ',', '.') . ",  potongan diskon: 25%";
            }
            echo '</p>';
            echo '<p>Total Harga: Rp. ' . number_format($cetakPelanggan->totHarga(), 0, ',', '.') . '</p>';

            $jenis_motor = [
                "NMAX" => "31.png",
                "AEROX" => "32.png",
                "PCX" => "33.png",
                "ZX25R" => "34.png",
                "BEAT" => "35.png",
                "CBR" => "36.png"
            ];

            $forGambar = $cetakPelanggan->getjenisMotor();

            
        ?>
        <img src="img/<?php echo $jenis_motor[$forGambar] ?>" alt="">      
    </div>
    <?php } ?>
    </div>

</body>

</html>