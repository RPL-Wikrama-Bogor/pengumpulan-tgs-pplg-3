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

<style>
  @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap');
.card {
  width: 300px;
  background-color: #f0f0f0;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 0 auto;
  margin-top: 150px;
}

.card h2 {
  text-align: center;
  margin-bottom: 15px;
  font-family: 'Rowdies', cursive;
}

.card form {
  display: flex;
  flex-direction: column;
}

.card label, .card input[type="number"], .card input[type="submit"] {
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px;
  font-family: 'Bree Serif', serif;
}

.card input[type="submit"] {
  background-color: #408321;
  color: rgb(255, 255, 255);
  border: none;
  cursor: pointer;
  font-family: 'Rowdies', cursive;;
}
.card input[type="submit"]:hover {
  background-color: #408321c2;
  color: rgb(255, 255, 255);
  border: none;
  cursor: pointer;
  font-family: 'Rowdies', cursive;
}

h5 {
  text-align: center;
    color: #435334;
    font-size: 18px;
    display: flex;
    justify-content: center;
    font-family: 'Rowdies', cursive;
}

h4 {
  text-align: center;
  color: rgb(255, 0, 0);
  font-size: 18px;
  display: flex;
  justify-content: center;
  font-family: 'Rowdies', cursive;
}


@media (max-width: 600px) {
  .card {
    width: 100%;
  }
}

</style>