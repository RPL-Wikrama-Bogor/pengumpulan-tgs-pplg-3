<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Daftar Makanan</h1>
    <ol>
        <li>Menu: Nasi Goreng <br>
            Harga: Rp.15.000
        </li><br>
        <li>Menu: Mie Goreng <br>
            Harga: Rp.10.000
        </li><br>
        <li>Menu: Kwetiaw <br>
            Harga: Rp.15.000
        </li><br>
        <li>Menu: Es Jeruk <br>
            Harga: Rp.5.000
        </li><br>
        <li>Menu: Teh Manis <br>
            Harga: Rp.5.000
        </li>
</ol>
<br><br>
    <form action="" method="post">
        <table>
            <tr>
                <h1>From Pemesanan</h1>
                <td>Pilih Makanan </td>
                <td>:</td>
                <td>
                    <select name="makanan" id="makanan">
                        <option hidden>---Pilih---</option>
                        <option value="Nasi Goreng">Nasi Goreng</option>
                        <option value="Mie Goreng">Mie Goreng</option>
                        <option value="Kwetiaw">Kwetiaw</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pembelian Makanan </td>
                <td>:</td>
                <td><input type="number" name="j_makanan" id="j_makanan"></td>
            </tr>

            <tr>
                <td>Pilih Minuman</td>
                <td>:</td>
                <td>
                    <select name="minuman" id="minuman">
                        <option hidden>---Pilih---</option>
                        <option value="Es Jeruk">Es Jeruk</option>
                        <option value="Teh Manis">Teh Manis</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Jumlah Pembelian Minuman</td>
                <td>:</td>
                <td><input type="number" name="j_minuman" id="j_minuman"></td>
            </tr>

            <tr><td><button type="submit" name="submit">Beli</button></td></tr>
        </table>
    </form>
   
<?php
if (isset($_POST['submit'])) {
echo"<h1>Struk Pembelian<br></h1>";
$makanan = $_POST['makanan'];
$j_makanan = $_POST['j_makanan'];
$minuman = $_POST['minuman'];
$j_minuman = $_POST['j_minuman'];
$menuMakanan = [
    ['makanan' => 'Nasi Goreng','harga' => 15000],
    ['makanan' => 'Mie Goreng','harga' => 10000],
    ['makanan' => 'Kwetiaw','harga' => 15000]
];
$menuMinuman = [
    ['minuman' => 'Es Jeruk','harga' => 5000],
    ['minuman' => 'Teh Manis','harga' => 5000]
];

$itemMak = 0;
$itemMin = 0;
foreach ($menuMakanan as $listMakanan) {
    if ($listMakanan["makanan"] == $makanan) {
        $itemMak = $listMakanan["harga"];
        break;
    }
}

foreach ($menuMinuman as $listMinuman) {
    if ($listMinuman["minuman"] == $minuman) {
        $itemMin = $listMinuman["harga"];
        break;
    }
}

$totalMak = $itemMak * $j_makanan ;
if ($j_makanan >= 5) {
    $diskonMak = 0.1 * $totalMak;
    $totalMak -= $diskonMak;
    echo "Anda mendapatkan diskon 10% di makanan: Rp.".number_format($diskonMak);
}

$totalMin = $itemMin * $j_minuman;
if ($j_minuman >= 5) {
    $diskonMin = 0.1 * $totalMin;
    $totalMin -= $diskonMin;
    echo "<br>Anda mendapatkan diskon 10% di minuman: Rp.".number_format($diskonMin);
}

$totalPembayaran = $totalMak + $totalMin;

echo "<br>-----------------------------";
echo "<br><b>Daftar Pesanan:<br></b>";
echo "Makanan: ". $makanan."<br>";
echo "Harga Rp.".number_format($itemMak)." x ".$j_makanan ."<br>";
echo "Total Harga Makanan: Rp.".number_format($totalMak). "<br>";
echo "Minuman: ".$minuman."<br>";
echo "Harga Rp.".number_format($itemMin)." x ".$j_minuman. "<br>";
echo "Total Harga Minuman: Rp.".number_format($totalMin). "<br>";
echo "-----------------------------<br>";
echo "Total Harga: Rp." .number_format($totalMak)." + Rp." .number_format($totalMin). " = Rp." .number_format($totalPembayaran) . "<br>";
}

?>

</body>
</html>