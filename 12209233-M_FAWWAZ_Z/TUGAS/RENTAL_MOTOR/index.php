<?php
class diskonMember
{
    private $memberList = [];

    public function addMember($namaMember)
    {
        $this->memberList[] = $namaMember;
    }


    public function menghitungDiskon($namaCustomer, $total)
    {
        if (in_array($namaCustomer, $this->memberList)) {
            $hargaDiskon = $total * 0.05;
            return $hargaDiskon;
        } else {
            return 0;
        }
    }
}

function menghitungTotalBiaya($biayaAwal, $pajak)
{
    return $biayaAwal + $pajak;
}

$hitungDiskon = new diskonMember();

$namaMember = ['Fawwaz', 'Yogi', 'Bagus'];

foreach ($namaMember as $nama) {
    $hitungDiskon->addMember($nama);
}


$namaCustomer = '';
$waktuRental = '';
$jenisMotor = '';
$biayaAwal = 0;
$pajak = 10000; // Pajak sebesar Rp. 10.000

if (isset($_POST['submit'])) {
    $namaCustomer = $_POST['nama'];
    $waktuRental = $_POST['waktu'];
    $jenisMotor = $_POST['jenis'];
    $hargaRental = 70000;

    if ($jenisMotor === "vario" || $jenisMotor === "pcx" || $jenisMotor === "nmax" || $jenisMotor === "xmax") {
        $biayaAwal = $hargaRental * $waktuRental; // Biaya per hari
    }

    $hargaDiskon = $hitungDiskon->menghitungDiskon($namaCustomer, $biayaAwal);
    $biayaTotal = menghitungTotalBiaya($biayaAwal, $pajak);

    // Menghitung totalSemua sesuai dengan permintaan
    $totalSemua = $biayaTotal - $hargaDiskon;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rental Motor</title>
</head>

<body>
    <h1>FORM RENTAL MOTOR</h1>
    <form action="" method="post">
        <!-- Input Nama -->
        <label for="namaPelanggan">Nama Pelanggan : </label>
        <input type="text" name="nama" id="nama" placeholder="Masukan nama" value="<?php echo $namaCustomer; ?>"
            required><br>

        <!-- Lama waktu rental -->
        <label for="waktu">Lama Waktu Rental (per hari) : </label>
        <input type="text" name="waktu" id="waktu" placeholder="Masukan waktu" value="<?php echo $waktuRental; ?>"
            required><br>

        <!-- Jenis Motor -->
        <label for="jenisMotor">Jenis Motor : </label>
        <select name="jenis" id="jenis">
            <option value="">---</option>
            <option value="vario" <?php if ($jenisMotor === "vario")
                echo "selected"; ?>>VARIO</option>
            <option value="pcx" <?php if ($jenisMotor === "pcx")
                echo "selected"; ?>>PCX</option>
            <option value="nmax" <?php if ($jenisMotor === "nmax")
                echo "selected"; ?>>NMAX</option>
            <option value="xmax" <?php if ($jenisMotor === "xmax")
                echo "selected"; ?>>XMAX</option>
        </select><br>

        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if ($hargaDiskon > 0) {
            echo "<p>Pelanggan $namaCustomer mendapatkan potongan sebesar 5%</p>";
        } else {
            echo "<p>Pelanggan $namaCustomer tidak mendapatkan potongan.</p>";
        }
        echo "<p>Jenis motor yang di rental adalah $jenisMotor</p>";
        echo "<p>Harga rental motor (per hari) : Rp." . number_format($hargaRental, 2) . " per hari.</p>";
        echo "<p>Biaya yang harus di bayar : Rp. " . number_format($totalSemua, 2) . ".</p>";
    }
    ?>

</body>

</html>