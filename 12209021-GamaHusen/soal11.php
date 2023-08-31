<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url(font/PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Regular.otf);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        h1 {
            margin-bottom: 65px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border: 0.5px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }

    

        #teks p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1 align="center">Kode Perusahaan</h1>
        <form action="" method="post">
            <label for="kode_pegawai">Nomor Koder Pegawai:</label>
            <input type="text" id="kode_pegawai" name="kode_pegawai" placeholder="gddmmyyyynn">
            <button type="submit" name="submit">Submit</button>
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
            $no_pegawai = $_POST["kode_pegawai"];

            if ($no_pegawai >= 12) {
                $no_golongan = substr($no_pegawai, 0, 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);

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

                $tanggal_lahir = $tanggal . ", " . $bulan . " " . $tahun;

                echo " <div id='teks'>
            
            Nomor golongan anda: <i><strong >$no_golongan</strong></i>
            Tanggal lahir anda: <i><strong>$tanggal_lahir</strong></i> 
            Nomor Urut Anda: <i><strong>$no_urutan</strong></i> 
            
            </div>   ";
            } else {
                echo "Maaf format tidak sesuai. ";
            }
        }
        ?>


    </div>
</body>

</html>