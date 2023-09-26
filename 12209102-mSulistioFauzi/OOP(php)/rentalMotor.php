<!DOCTYPE html>
<html>
<head>
    <title>Rincian Rental Motor</title>
    <link rel="stylesheet" href="rentalMotor.css">
</head>
<body>
<div class="container">
    <div class="result">
        <h1>Rental Motor</h1>
        <form action="" method="post">
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" required><br><br>

            <label for="lama_rental">Lama Waktu Rental (per hari):</label>
            <input type="number" name="lama_rental" id="lama_rental" required><br><br>

            <label for="jenis_motor">Jenis Motor:</label>
            <select name="jenis_motor" id="jenis_motor">
                <option value="Scooter">Scooter</option>
                <option value="Nmax">Nmax</option>
                <option value="Beat">Beat</option>
                <option value="Vario">Vario</option>
            </select><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

            
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $lama_rental = $_POST["lama_rental"];
    $jenis_motor = $_POST["jenis_motor"];

    class RentalMotor {
        private $nama_pelanggan;
        private $lama_rental;
        private $jenis_motor;
        private $harga_per_hari;
        private $total_harga_sebelum_diskon;
        private $diskon;
        private $total_harga_setelah_diskon;
        private $pajak;
        private $total_biaya;

        public function __construct($nama_pelanggan, $lama_rental, $jenis_motor) {
            $this->nama_pelanggan = $nama_pelanggan;
            $this->lama_rental = $lama_rental;
            $this->jenis_motor = $jenis_motor;
            $this->harga_per_hari = $this->tentukanHargaMotor();
            $this->total_harga_sebelum_diskon = $this->harga_per_hari * $this->lama_rental;
            $this->diskon = $this->hitungDiskon();
            $this->total_harga_setelah_diskon = $this->total_harga_sebelum_diskon - $this->diskon;
            $this->pajak = 10000;
            $this->total_biaya = $this->total_harga_setelah_diskon + $this->pajak;
        }

        private function tentukanHargaMotor() {
            $harga_motor = [
                "Scooter" => 70000,
                "Nmax" => 100000,
                "Beat" => 60000,
                "Vario" => 80000,
            ];
            if (array_key_exists($this->jenis_motor, $harga_motor)) {
                return $harga_motor[$this->jenis_motor];
            } else {
                return 0;
                }
            }

        private function hitungDiskon() {
            $nama_member = ["ana", "budi", "tio", "ujang"];
            if (in_array(strtolower($this->nama_pelanggan), $nama_member)) {
                return 0.05 * $this->total_harga_sebelum_diskon;
            } else {
                return 0;
            }
        }

        public function tampilkanRincian() {
            echo "<h2>Rincian Rental Motor</h2>";
            echo "<ul>";
            echo "<li><label>Nama Pelanggan:</label> " . $this->nama_pelanggan . "</li>";
            echo "<li><label>Lama Waktu Rental (per hari):</label> " . $this->lama_rental . "</li>";
            echo "<li><label>Jenis Motor:</label> " . $this->jenis_motor . "</li>";
            echo "<li><label>Harga rental per-harinya:</label> Rp. " . number_format($this->harga_per_hari, 0, ',', '.') . "</li>";
            echo "<li><label>Total Harga Sebelum Diskon:</label> Rp. " . number_format($this->total_harga_sebelum_diskon, 0, ',', '.') . "</li>";
            echo "<li><label>Diskon:</label> Rp. " . number_format($this->diskon, 0, ',', '.') . "</li>";
            echo "<li><label>Total Harga Setelah Diskon:</label> Rp. " . number_format($this->total_harga_setelah_diskon, 0, ',', '.') . "</li>";
            echo "<li><label>Tambahan Pajak:</label> Rp. " . number_format($this->pajak, 0, ',', '.') . "</li>";
            echo "<li class='total-cost'><label>Total Biaya:</label> Rp. " . number_format($this->total_biaya, 0, ',', '.') . "</li>";
            echo "</ul>";
            }
        }

        $rental = new RentalMotor($nama_pelanggan, $lama_rental, $jenis_motor);
        $rental->tampilkanRincian();
        echo "<div class='back-button'><a href='javascript:history.back()'>Kembali</a></div>";
        } 
    ?>
    
