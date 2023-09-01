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
</head>
<style>
/* CSS umum yang berlaku untuk semua layar */
.card {
    background-color: #f0f0f0;
    padding: 20px;
    margin: 10px;
    border-radius: 5px;
}

/* CSS untuk layar dengan lebar kurang dari 600px */
@media screen and (max-width: 600px) {
    .card {
        width: 100%; /* Mengisi seluruh lebar layar */
    }
    
    form {
        max-width: 100%; /* Mengisi seluruh lebar layar */
    }

    label, input {
        width: 100%; /* Mengisi seluruh lebar form */
        margin-bottom: 10px;
    }

    button {
        width: 100%; /* Mengisi seluruh lebar tombol */
    }
}
</style>
<body>

<div class="card">
<form action="" method="post">
        <h2>Masukan kode pegawai</h2>
        <div style="display: flex;">
        <label for="no_pegawai"> No Pegawai :  </label>
        <input type="number" name="no_pegawai" id="no_pegawai">
        </div>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>

    <div class="card">
    <?php
    
    if (isset($_POST['submit'])) {
        $no_pegawai = $_POST['no_pegawai'];
        
        $no_pegawai = strval($no_pegawai);

        if (strlen($no_pegawai) !== 11) {
            echo "No Pegawai Tidak Sesuai";
        } else {
            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1, 2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

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

            $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
            echo "<center>Kode Pegawai : " . $no_pegawai . "<br>No Golongan : " . $no_golongan . "<br>Tanggal Lahir : " . $tanggal_lahir . "<br>No Urutan : " . $no_urutan . "</center>";
        }
    }
?>
</div>
</body>
</html>