<?php
$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pegawai</title>
</head>
<style>
    body {
        background-color: #AEC3AE;
    }
     .card {
    margin-top: 130px;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    padding: 15px 16px;
    width: 35%;
    border-radius: 15px;
    background-color : #fff;
    line-height: 40px;
    margin-top: 20%;
}
 input {
  background-color: #AEC3AE;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;;
}
button {
    height: 30px;
    width: 60px;
    border: none;
    background-color: #AEC3AE;
    border-radius: 50px;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}
</style>
<body>
    <center><h1>Soal No 11</h1></center>
    <center>
    <div class="card">
        <form action="" method="post">
            <label for="no_pegawai"> No Pegawai : </label>
            <div>
                <input type="number" name="no_pegawai" id="no_pegawai"> </br>
            </div>
            <button type="submit" name="submit">Kirim</button>
        </form>
        </center>
            <?php
            // Cek apakah button dgn name submit di klik
            if (isset($_POST['submit'])) {
                $no_pegawai = $_POST['no_pegawai'];
                
                $no_pegawai = strval($no_pegawai);

                if ($no_pegawai > 99999999999) {
                    echo "No Pegawai Tidak Sesuai";
                } else {
                    $no_golongan = substr($no_pegawai, 0, 1);
                    $tanggal = substr($no_pegawai, 1, 2);
                    $bulan = substr($no_pegawai, 3, 1);
                    $tahun = substr($no_pegawai, 5, 4);
                    $no_urutan = substr($no_pegawai, 9, 2);

                    if($bulan == "01") {
                        $bulan = "Januari";
                    } else if($bulan == "02") {
                        $bulan = "Februari";
                    } else if($bulan == "03") {
                        $bulan = "Maret";
                    } else if($bulan == "04") {
                        $bulan = "April";
                    } else if($bulan == "05") {
                        $bulan = "Mei";
                    } else if($bulan == "06") {
                        $bulan = "Juni";
                    } else if($bulan == "07") {
                        $bulan = "Juli";
                    } else if($bulan == "08") {
                        $bulan = "Agustus";
                    } else if($bulan == "09") {
                        $bulan = "September";
                    } else if($bulan == "10") {
                        $bulan = "Oktober";
                    } else if($bulan == "11") {
                        $bulan = "November";
                    } else {
                        $bulan = "Desember";
                    } 

                    $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
                    echo "<center>Kode Pegawai : " . $no_pegawai . "<br>No Golongan : " . $no_golongan . "<br>Tanggal Lahir : " . $tanggal_lahir . "<br>No Urutan : " . $no_urutan . "</center>";
                }
                
            }
        ?>
    </div>
</body>
</html>
