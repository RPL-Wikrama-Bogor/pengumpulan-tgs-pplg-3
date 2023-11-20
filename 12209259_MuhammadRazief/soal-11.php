    <?php
    // Deklarasi variabel
    $no_pegawai = "";
    $no_golongan = "";
    $tanggal = "";
    $bulan = "";
    $tahun = "";
    $no_urut = "";

    if (isset($_POST["submit"])) {
        // Ambil nomor pegawai dari input
        $no_pegawai = $_POST['no_pegawai'];

        // Validasi panjang nomor pegawai
        if (strlen($no_pegawai) !== 11) {
            echo "Nomor Pegawai tidak sesuai";
            exit();
        }

        // Ambil komponen-komponen dari nomor pegawai
        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urut = substr($no_pegawai, 9, 2);

        // Ubah bulan menjadi nama bulan
        $nama_bulan = "";
        if ($bulan === "01") {
            $nama_bulan = "Januari";
        } elseif ($bulan === "02") {
            $nama_bulan = "Februari";
        } elseif ($bulan === "03") {
            $nama_bulan = "Maret";
        } elseif ($bulan === "04") {
            $nama_bulan = "April";
        } elseif ($bulan === "05") {
            $nama_bulan = "Mei";
        } elseif ($bulan === "06") {
            $nama_bulan = "Juni";
        } elseif ($bulan === "07") {
            $nama_bulan = "Juli";
        } elseif ($bulan === "08") {
            $nama_bulan = "Agustus";
        } elseif ($bulan === "09") {
            $nama_bulan = "September";
        } elseif ($bulan === "10") {
            $nama_bulan = "Oktober";
        } elseif ($bulan === "11") {
            $nama_bulan = "November";
        } elseif ($bulan === "12") {
            $nama_bulan = "Desember";
        } else {
            $nama_bulan = "Bulan tidak valid";
        }

        // Cetak hasil
        echo "Nomor Golongan: " . $no_golongan . "<br>";
        echo "Tanggal Lahir: " . $tanggal . " " . $nama_bulan . " " . $tahun . "<br>";
        echo "Nomor Urut: " . $no_urut;
    }
    ?>  
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: url(bg-image.jpg);
        background-size: cover;
    }

    .container{
        width: 20%;
        max-width: 250px;
        background: rgba(0, 0, 0, 0.5);
        padding: 100px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: inset -2px 2px 2px white;
    }

    .form-title{
        font-size: 50px;
        font-weight: 600;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 2px black;
        border-bottom: solid 1px white;
    }
        </style>
        </head>
        <body>
            <div class="container">
            <h1 class="form-title">Data Pegawai</h1>
                <form action="" method="post">
                    <input type="text" name="no_pegawai" id="no_pegawai"placeholder="No Pegawai"/>
                    <button type="submit" name="submit">Kirim</button>
                </form>
            </div>
    </div>
    </div>
        </body>
        </html>
