<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Information</title>
</head>
<body>
<div class="card">
    <form action="" method="post">
        <div>
            <label for="kode">Masukkan Kode Pegawai: </label>
            <br><br>
            <input type="number" id="kode" name="kode" placeholder="gddmmyyyynn" required>
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
        </div>
    </form>

    <?php
$no_pegawai = "";
$no_golongan = "";
$tanggal = "";
$bulan = "";
$tahun = "";
$no_urutan = "";
$tanggal_lahir = "";
if (isset($_POST["submit"])) {
    $no_pegawai = $_POST["kode"];

    if ($no_pegawai >= 12) {
        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1,2);
        $bulan = substr($no_pegawai, 3,2);
        $tahun = substr($no_pegawai, 5,4);
        $no_urutan = substr($no_pegawai, 9 ,2);

        switch ($bulan) {
            case '01': 
                $bulan = "Januari";
                break;
            case '02':
                $bulan = "Februari";
                break;
            case '03':
                $bulan = "Maret";
                break;
            case '04':
                $bulan = "April";
                break;
            case '05':
                $bulan = "Mei";
                break;
            case '06':
                $bulan = "Juni";
                break;
            case '07':
                $bulan = "Juli";
                break;
            case '08':
                $bulan = "Agustus";
                break;
            case '09':
                $bulan = "September";
                break;
            case '10':
                $bulan = "Oktober";
                break;
            case '11':
                $bulan = "November";
                break;
            case '12':
                $bulan = "Desember";
                
                break;
            
            default:
                echo "Kode Kesalahan!!!";
                break;

            }

            $tanggal_lahir = $tanggal .", ".$bulan ." ". $tahun;

            echo "<div class='card'>
            <br>
            Nomor golongan anda: <i><strong >$no_golongan</strong></i><br>
            Tanggal lahir anda: <i><strong>$tanggal_lahir</strong></i><br>
            Nomor Urut Anda: <i><strong>$no_urutan</strong></i><br>
            
            </div>"  ;
    } 
    else {
        echo "Maaf format tidak sesuai. ";
    }

}
?>
</body>
</html>
