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
    <title>bulan kelahiran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <div class="card">
        <h1>Format Pegawai</h1>
    <form action="" method="post">
            <label for="pegawai">Nomer Pegawai: </label><br>
            <input type="number" name="no_pegawai" id="pegawai"><br>
            <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>
    <div class="card2"> 
<?php
    if (isset($_POST['submit'])) {
        $no_pegawai = $_POST['no_pegawai'];
        
        if (strlen($_POST['no_pegawai']) != 11) {
            echo "No Pegawai Tidak Sesuai";
        } else {
            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1, 2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

            if ($bulan == "01") {
                $bulan = "Januari";
            }elseif ($bulan == "02") {
                $bulan = "Februari";
            }elseif ($bulan == "03") {
                $bulan = "Maret";
            }elseif ($bulan == "04") {
                $bulan = "April";
            }elseif ($bulan == "05") {
                $bulan = "Mei";
            }elseif ($bulan == "06") {
                $bulan = "Juni";
            }elseif ($bulan == "07") {
                $bulan = "Juli";
            }elseif ($bulan == "08") {
                $bulan = "Agustus";
            }elseif ($bulan == "09") {
                $bulan = "September";
            }elseif ($bulan == "10") {
                $bulan = "Oktober";
            }elseif ($bulan == "11") {
                $bulan = "November";
            }else {
                $bulan = "Desember";
            }
            // switch ($bulan) {
            //     case "01": $bulan = "Januari"; break;
            //     case "02": $bulan = "Februari"; break;
            //     case "03": $bulan = "Maret"; break;
            //     case "04": $bulan = "April"; break;
            //     case "05": $bulan = "Mei"; break;
            //     case "06": $bulan = "Juni"; break;
            //     case "07": $bulan = "Juli"; break;
            //     case "08": $bulan = "Agustus"; break;
            //     case "09": $bulan = "September"; break;
            //     case "10": $bulan = "Oktober"; break;
            //     case "11": $bulan = "November"; break;
            //     default: $bulan = "Desember"; break;
            // }

            $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
            // echo "<center><li>Kode Pegawai : " . $no_pegawai . "<br><br></li>
            //      <li>No Golongan : " . $no_golongan . "<br><br></li>
            //     <li> Tanggal Lahir : " . $tanggal_lahir . "<br><br></li>
            //      <li>No Urutan : " . $no_urutan . "</center></li>
            // ";
            echo "<li>Kode Pegawai : " . $no_pegawai . "<br></li>";
            echo "<li>No Golongan : " . $no_golongan . "<br></li>";
            echo "<li> Tanggal Lahir : " . $tanggal_lahir . "<br></li>";
            echo "<li>No Urutan : " . $no_urutan. "<br></li>";
        }
         
    }
?>
 </div>
</center>
</div>
</body>
</html>