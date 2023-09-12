<?php

$no_pegawai;
$no_golongan;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
  <h2>Form Input</h2>
  <form action="" method="post">
    <label for="no_pegawai">Nomor Pegawai</label>
    <input type="number" id="no_pegawai" name="no_pegawai" required>
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>




<?php

if (isset($_POST['submit'])) {
    

$no_pegawai = $_POST['no_pegawai'];

if (strlen($no_pegawai) < 11) {
    echo "<h4>Nomor pegawai harus terdiri dari 11 digit !</h4>";
} else {

$no_golongan = substr($no_pegawai, 0, 1);
$tanggal_lahir = substr($no_pegawai, 1, 2);
$bulan = substr($no_pegawai, 3, 2);
$tahun = substr($no_pegawai, 5, 4);
$no_urutan = substr($no_pegawai, 9, 2);

$namaBulan = array(
    "01" => "JAN",
    "02" => "FEB",
    "03" => "MAR",
    "04" => "APR",
    "05" => "MEI",
    "06" => "JUN",
    "07" => "JUL",
    "08" => "AGU",
    "09" => "SEP",
    "10" => "OKT",
    "11" => "NOV",
    "12" => "DES"
);

// Konversi angka bulan menjadi nama bulan
$namaBulanLahir = $namaBulan[$bulan];

// Cetak informasi
echo "<h5>Nomor Golongan : " . $no_golongan . "<br></h5>";
echo "<h5>Tanggal Lahir : " . $tanggal_lahir ." " . $namaBulanLahir ." "  . $tahun . "<br></h5>";
echo "<h5>Nomor Urut : " . $no_urutan . "<br></h5>";
}
}
?>