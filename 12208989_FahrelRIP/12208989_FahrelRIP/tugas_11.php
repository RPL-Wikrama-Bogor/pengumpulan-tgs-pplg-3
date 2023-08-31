<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Georgia, serif;
    background-image: radial-gradient(circle at 94.08% 24.55%, #b9d4ff 0, #3887ff 50%, #0045c5 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 7px 10px #435334;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: black;
}

form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
    
<body>
    <div class="container">
        <form method="POST" action="">
        <h1>Masukkan Kode Pegawai</h1>
        <p>Kode Pegawai: </p>
                <label for="">
                    <input type="number" value="kode pegawai" name="bilangan" required placeholder=" Contoh : 32205199505">
                    <button type="submit" value="Submit" name="submit"><b>Submit</b></button>
                </label>

            <?php
            if (isset($_POST['submit'])) {
                $kodepegawai = $_POST['bilangan'];
                $golongan = substr($kodepegawai, 0, 1);
                $tanggal = substr($kodepegawai, 1, 2);
                $bulan = substr($kodepegawai, 3, 2);
                $tahun = substr($kodepegawai, 5, 4);
                $urutan = substr($kodepegawai, 9);
                if ($kodepegawai < 11) {
                    echo "nomor pegawai tidak sesuai";
                } else {
                    $nama_bulan = "";
                    if ($bulan == "01") {
                        $nama_bulan = "Januari";
                    } elseif ($bulan == "02") {
                        $nama_bulan = "Februari";
                    } elseif ($bulan == "03") {
                        $nama_bulan = "Maret";
                    } elseif ($bulan == "04") {
                        $nama_bulan = "April";
                    } elseif ($bulan == "05") {
                        $nama_bulan = "Mei";
                    } elseif ($bulan == "06") {
                        $nama_bulan = "Juni";
                    } elseif ($bulan == "07") {
                        $nama_bulan = "Juli";
                    } elseif ($bulan == "08") {
                        $nama_bulan = "Agustus";
                    } elseif ($bulan == "09") {
                        $nama_bulan = "September";
                    } elseif ($bulan == "10") {
                        $nama_bulan = "Oktober";
                    } elseif ($bulan == "11") {
                        $nama_bulan = "November";
                    } elseif ($bulan == "12") {
                        $nama_bulan = "Desember";
                    $tanggal_lahir = "$tanggal $nama_bulan $tahun";
                    echo "Nomor Golongan: $golongan<br>";
                    echo "Tanggal Lahir: $tanggal_lahir <br>";
                    echo "Nomor Urut Pegawai: $urutan<br>";
                    }
                }
            }
            ?>
        </form>
    </div>
</body>
</html>