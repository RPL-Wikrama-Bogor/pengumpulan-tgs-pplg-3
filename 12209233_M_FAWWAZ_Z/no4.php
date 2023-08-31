<?php 

$tunjangan;
$pajak;
$gaji_bersih;
$gaji_pokok;
$nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari nilai terbesar</h1>
    <form action="" method="post">
        <div class="">
            <label for="nama">Masukan nama karyawan: </label>
                <input type="text" name="nama" id="nama"><br><br>
        </div>
        <div class="">
            <label for="gaji_pokok">Masukan gaji pokok karyawan : </label>
                <input type="number" name="gaji_pokok" id="gaji_pokok"><br><br>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$nama = $_POST['nama'];
$gaji_pokok = $_POST['gaji_pokok'];

$tunjangan = (20 * $gaji_pokok) / 100;
$pajak = 15 * ($gaji_pokok + $tunjangan) / 100 ;
$gaji_bersih = $gaji_pokok + $tunjangan - $pajak ;

echo "Hasi Dari Code Diatas<br>";
echo "-----------------------------------<br>";
echo "Nama Karyawan : $nama <br>";
echo "Tunjangan Karywan : "  . number_format($tunjangan, 2, '.', ',') . "<br>";;
echo "Pajak yang diterima : " . number_format($pajak, 2, '.', ',') . "<br>";;;
echo "Gaji Bersih : " . number_format($gaji_bersih, 2, '.', ',') . "<br>";;;
}
?>