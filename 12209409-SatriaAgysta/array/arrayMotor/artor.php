<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    
    <div class="kumpulan">
    <div class="input">
        <h2>Form Peminjaman</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Waktu (perhari)</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td><input type="number" name="time" required></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td></td>
                    <td>:</td>
                    <td></td>
                    <td>
                        <select name="pilihan" id="">
                            <option value="" hidden>pilih</optin>
                            <option value="ZX25R">ZX25R</option>
                            <option value="R1M">R1M</option>
                            <option value="R6">R6</option>
                        </select>
                    </td>
                </tr>
            </table><br>
            <button type="submit" name="submit">Submit</button></td>
        </form>
    </div>

        <div class="hasil">
    <?php
    class data
    {
        //update user
        protected $user = ['Satria', 'Agysta', 'Sagyra'];

        public $ZX25R = 200000,
            $R1M = 120000,
            $R6 = 400000;

        protected $pajak = 10000,
            $diskon = 5 / 100;
    }

    class user extends data
    {
        public function userMember($harga, $pilihan, $hari)
        {
            echo "<h2>Laporan Peminjaman</h2>";
            $result = $harga * $hari + $this->pajak;
            $nama = $_POST['name'];

            if (in_array($nama, $this->user)) {
                $result = $result - ($result * $this->diskon);
                echo $nama . " berstatus sebagai Member mendapat diskon sebesar 5% <br>";
            } else {
                echo $nama . " berstatus sebagai Non Member mendapat diskon sebesar 0% <br>";
            }
            echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
            echo "Harga rental per-harinya adalah : Rp. " . number_format($harga) . "<br><br>";
            echo "Besarnya yang harus dibayarkan adalah : Rp. " . number_format($result);
        }
    }

    if (isset($_POST['submit'])) {
        $hasil = new user();
        $nama = $_POST['name'];
        $jenis = $_POST['pilihan'];
        $hari = $_POST['time'];

        switch ($jenis) {
            case "ZX25R":
                $harga = $hasil->ZX25R;
                break;
            case "R1M":
                $harga = $hasil->R1M;
                break;
            case "R6":
                $harga = $hasil->R6;
                break;
            default:
                $harga = 0;
                break;
        }
        $hasil->userMember($harga, $jenis, $hari);
    }
    ?>
    </div>
</div>
<div class="object">
    <div class="run"></div>
</div>
</body>

</html>
