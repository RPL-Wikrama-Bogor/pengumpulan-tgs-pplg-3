<style>
    body{
        background-color:grey;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }
    .container{
        padding: 50px 40px;
        width: 200px;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius:8px;
    }
    .container h2 {
        align-items: center;
    }
    .coba{
        justify-content:center;

    }
    .coba label {
        
    }
    input[type=number] {
  width: 100%;
  padding: 9px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius:4px;
}

button {
   background-color: #797979;
   color: white;
   border: none;
   border-radius: 5px;
   text-align: center;
}
.hasil{
    display:inline-block;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data pegawai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
</head>
<body><div class="container">
    <h2>Pendataan Pegawai</h2>
    <form action="" method="post">
        <div class="coba">
            <label for="np">Masukan No Pegawai</label>
            <input type="number" name="np" id="np" placeholder="11223344556">
            <br>
            <button type="submit" name="submit">kirim</button>
        </div>
    </form>
</div>
</body>
</html>


<?php
$no;
$nogol;
$tanggal;
$bulan;
$tahun;
$nour;
$ttg;

if (isset($_POST['submit'])) {
    $no = $_POST['np'];
    
    if ($no < 11) {
        echo "no pegawai tidak sesuai";
    }else{
        $nogol = substr($no,0,1);
        $tanggal = substr($no,1,2);
        $bulan = substr($no,3,2);
        $tahun = substr($no,5,4);
        $nour = substr($no,9,2);

        if ($bulan == "01") {
            $bulan = "januari";
        }elseif ($bulan == "02") {
             $bulan = "februari";
        
        }elseif($bulan == "03") {
             $bulan = "maret";
        }
        elseif ($bulan == "04") {
             $bulan = "april";
        }
        elseif ($bulan == "05") {
             $bulan = "mei";
        }
        elseif ($bulan == "06") {
             $bulan = "juni";
    }
        elseif ($bulan == "07") {
             $bulan = "juli";
    }
        elseif ($bulan == "08") {
             $bulan = "agustus";
    }
        elseif ($bulan == "09") {
             $bulan = "september";
    }
        elseif ($bulan == "10") {
             $bulan = "oktober";
    }
        elseif ($bulan == "11") {
             $bulan = "november";
    }else{
        $bulan = "desember";    
    }
    $ttg = " " .$tanggal ." / ". $bulan ." / ". $tahun;
    echo "no golongan pegawai ialah : ". $nogol ." <br> tanggal lahir pegawai ialah :" . $ttg."<br> dan no urut pegawai ialah : " . $nour;
}
}
?>

