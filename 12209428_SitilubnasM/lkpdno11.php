<?php
$n_gol;
$n_peg;
$n_urut;
$tanggal;
$bulan;
$tahun;
$tgl_lahir;
$nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card{
            /* border: 1px; */
            display: inline-block;
            margin-left: 405px;
            padding-bottom: 160px;
            padding-left: 90px;
            padding-right: 90px;
            background-color: #E2C799;
            border-radius: 15px;
        }
        body{
            background-image: url(wall.jpg);
            max-width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .card1{
            background-color: #E2C799;
            margin-left: 400px;
            /* margin-bottom: 500px; */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
    <div style="border:15px; margin-top:80px;">
    <center>
    <h1>Format Pegawai</h1>
    <form action="" method="post">
        <label for="nama">Masukkan Nama anda: </label> <br><br>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="npeg">Masukkan nomer pegawai: </label> <br><br>
        <input type="text" name="pegawai" id="npeg"><br><br>
        <button type="submit" name="submit">Kirim</button><br><br><br>
        </form>
    </center>
<?php

if(isset($_POST['submit'])){
    $n_peg = $_POST['pegawai'];
    $nama = $_POST['nama'];
    // $n_peg= strval($n_peg);

        if (strlen($n_peg) !== 11) {
            echo "No Pegawai Tidak Sesuai";
        } else {
            $n_gol = substr($n_peg, 0, 1);
            $tanggal = substr($n_peg, 1, 2);
            $bulan = substr($n_peg, 3, 2);
            $tahun = substr($n_peg, 5, 4);
            $n_urut= substr($n_peg, 9, 2);

            if($bulan == "01"){
                $bulan = "Januari";
            } 
            elseif($bulan == "02"){
                $bulan = "Februari";
            }
            elseif($bulan == "03"){
                $bulan = "Maret";
            }
            elseif($bulan == "04"){
                $bulan = "April";
            }
            elseif($bulan == "05"){
                $bulan = "Mei";
            }
            elseif($bulan == "06"){
                $bulan = "Juni";
            }
            elseif($bulan == "07"){
                $bulan = "Juli";
            }
            elseif($bulan == "08"){
                $bulan = "Agustus";
            }
            elseif($bulan == "09"){
                $bulan = "September";
            }
            elseif($bulan == "10"){
                $bulan = "Oktober";
            }
            elseif($bulan == "11"){
                $bulan = "November";
            }
            else{
                $bulan = "Desember";
            }

            $tgl_lahir = $tanggal . " " . $bulan . " " . $tahun;
            echo "<center>Kode Pegawai : " . $n_peg . "<br>No Golongan : " . $n_gol . "<br>Tanggal Lahir : " . $tgl_lahir . "<br>No Urutan : " . $n_urut . "</center>";
        }
    }
?>
    
</div>
</div>
</div>
</body>
</html>
