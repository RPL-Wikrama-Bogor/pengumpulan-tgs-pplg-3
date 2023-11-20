<?php
class RentalMotor {
    private $harga_motor = [
        'scoopy' => 80000,
        'vespa' => 100000,
        'nmax' => 150000,
        'pcx' => 180000,
    ];
    private $potongan_harga = 0.05;
    private $nama_member = ['iqbal', 'andi', 'agus', 'zainal'];
    private $pajak = 10000;

    public function hitungBiaya($nama, $jenis_motor, $waktu_rental) {
        $biaya = $this->harga_motor[$jenis_motor] * $waktu_rental;
        $member = in_array(strtolower($nama), $this->nama_member);

        if ($member) {
            $biaya -= $biaya * $this->potongan_harga;
        }

        // Tambahkan pajak
        $biaya += $this->getPajak();

        return ['biaya' => $biaya, 'member' => $member];
    }

    public function getPajak() {
        return $this->pajak;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jenis_motor = $_POST['jenis_motor'];
    $waktu_rental = intval($_POST['waktu_rental']);

    $rental_motor = new RentalMotor();
    $hasil_rental = $rental_motor->hitungBiaya($nama, $jenis_motor, $waktu_rental);
    $biaya_total = $hasil_rental['biaya'];
    $member = $hasil_rental['member'];
    $potongan_teks = ($member) ? "Anda mendapatkan potongan harga 5%." : "Anda tidak mendapatkan potongan harga.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rental Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Form Rental Motor</h1>
    <form action="" method="POST">
        <label for="nama">Nama Pelanggan:</label>
        <input type="text" id="nama" name="nama" required><br>
        
        <label for="jenis_motor">Jenis Motor:</label>
        <select id="jenis_motor" name="jenis_motor" required>
            <option value="scoopy">Scoopy</option>
            <option value="vespa">Vespa Matic</option>
            <option value="nmax">Nmax</option>
            <option value="pcx">PCX</option>
        </select><br>
        
        <label for="waktu_rental">Waktu Rental (hari):</label>
        <input type="number" id="waktu_rental" name="waktu_rental" min="1" required><br>
        
        <input type="submit" value="Hitung Biaya">
    </form>

    <?php
    if (isset($biaya_total)) {
        echo "<h2>Detail Rental:</h2>";
        echo "Nama Pelanggan: $nama<br>";
        echo "Member: " . ($member ? "Ya" : "Tidak") . "<br>";
        echo "Jenis Motor: $jenis_motor<br>";
        echo "Waktu Rental (hari): $waktu_rental<br>";
        echo "Biaya Total: Rp. " . number_format($biaya_total, 2) . "<br>";
        echo "Pajak: Rp. " . number_format($rental_motor->getPajak(), 2) . "<br>";
        echo $potongan_teks;
    }
    ?>
</body>
</html>
