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
    <title>DD-MMM-YYYY</title>
    <link rel="stylesheet" href="tgs11.css">
</head>
<body>
<form action="" method="post">
<div class="wrapper">
        <div class="text">
            <center><h2 style="color: salmon;">G-DD-MM-YYYY-NN</h2></center>
        </div><br>

        <div class="input-data">
            <input type="number" name="pegawai" required>
            <div class="underline">
            </div>
            <label>No Pegawai</label>
        </div><br>

        <table>
            <tr>
                <td>
                    <button class="my-button" type="submit" value="Submit" name="submit">Hitung</button>
                </td>
            </tr>
        </table>
    </form><br>

    <?php
        if(isset($_POST['submit'])){
            $no_pegawai = $_POST['pegawai'];

            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1,2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

            //proses
            if ($no_pegawai < 11){
                echo "No pegawai tidak sesuai!";
            }
            else if ($bulan == "01"){
                echo "Bulan = Januari";
            }
            else if ($bulan == "02"){
                echo "Bulan = Februari";
            }
            else if ($bulan == "03"){
                echo "Bulan = Maret";
            }
            else if ($bulan == "04"){
                echo "Bulan = April";
            }
            else if ($bulan == "05"){
                echo "Bulan = Mei";
            }
            else if ($bulan == "06"){
                echo "Bulan = Juni";
            }
            else if ($bulan == "07"){
                echo "Bulan = Juli";
            }
            else if ($bulan == "08"){
                echo "Bulan = Agustus";
            }
            else if ($bulan == "09"){
                echo "Bulan = September";
            }
            else if ($bulan == "10"){
                echo "Bulan = Oktober";
            }
            else if ($bulan == "11"){
                echo "Bulan = November";
            }
            else if ($bulan == "12"){
                echo "Bulan = Desember";
            }
            else {
                echo "Bulan tidak sesuai!";
                echo "<br>";
            }

            if ($tanggal > "31"){
                echo "Tanggal tidak sesuai!";
                echo "<br>";
            }
            echo "<br>";
      

            $tanggal_lahir = $tanggal. "/" .$bulan . "/".$tahun;
          
            //output
            echo "No Golongan = " . $no_golongan . "<br>";
            echo "Tanggal Lahir = " . $tanggal_lahir . "<br>";
            echo "No Urutan = " . $no_urutan;

        }

    ?>
    </div>
</body>
</html>