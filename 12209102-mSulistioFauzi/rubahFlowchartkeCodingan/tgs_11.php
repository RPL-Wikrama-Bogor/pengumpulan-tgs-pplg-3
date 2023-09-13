<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
    
    <style>
        body{
    background-color: #00FFFF;

}
.card{
background-color:#FAF1E4 ;
box-sizing: border-box;
padding: 20px;
display: flex;
justify-content: center;
width: 290px;
height: 155px;
margin: 50px;
box-sizing: border-box;
border-radius: 20px;
}
a, button,input[type=submit],input[type=reset] {
font-family: sans-serif;
font-size: 15px;
background: #22a4cf;
color: white;
border: white 3px solid;
border-radius: 5px;
padding: 12px 20px;
margin-top: 10px;
}
a {
text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
opacity:0.9;
}

.tampilan_hasil {
text-align: center;
border: 1px solid #ccc;
padding: 20px;
max-width: 400px;
margin: 0 auto;
background-color: #FAF1E4 ;
border-radius: 20px;
}
    </style>
</head>
<body>
    <center>
    <div class="card">
        <form action="" method="post">
            <div>
            <h2>Isi Biodata</h2>
                <label for="no_pegawai"> No Pegawai : </label>
                <input type="number" name="no_pegawai" id="no_pegawai" placeholder="Contoh:12345678910" >
                </div>
            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
</body>
</html>


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
            // echo "<center>Kode Pegawai : " . $no_pegawai . "<br>No Golongan : " . $no_golongan . "<br>Tanggal Lahir : " . $tanggal_lahir . "<br>No Urutan : " . $no_urutan . "</center>";
            echo '<div class="tampilan_hasil">';
            echo '<h2>Informasi Pegawai</h2>';
            echo '  <p>Kode Pegawai: ' . $no_pegawai . '</p>';
            echo '  <p>No Golongan: ' . $no_golongan . '</p>';
            echo '  <p>Tanggal Lahir: ' . $tanggal_lahir . '</p>';
            echo '  <p>No Urutan: ' . $no_urutan . '</p>';
            echo '</div>';

        }
         
    }
?>