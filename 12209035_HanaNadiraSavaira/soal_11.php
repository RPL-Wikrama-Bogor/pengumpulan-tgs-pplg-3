<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bulan kelahiran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #96B6C5;
            min-height: 100vh; /* Set minimum height of the body */
            margin: 0; /* Remove default margin */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #ADC4CE;
            border-radius: 10px;
            box-shadow: 2px 8px 20px 0 rgba(0, 0, 0, 0.2);
            padding: 5%;
            text-align: center;
            width: 80%; /* Adjust card width */
            max-width: 400px; /* Set a maximum width for larger screens */
        }

        button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            padding: 8px 18px;
            text-align: center;
            font-size: 15px;
            transition-duration: 0.4s;
            margin-top: 22px;
            width: 25%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .hasil {
            background-color: #ADC4CE;
            border-radius: 10px;
            box-shadow: 2px 8px 20px 0 rgba(0, 0, 0, 0.2);
            padding: 86px;
            width: 35%;
            margin-top: 1%;
        }


    </style>
</head>
<body>
    <div class="card">
        <div class="text">
            <h2>Format Pegawai</h2>
            <form action="" method="post">
                <div>
                    <label for="no_pegawai">No Pegawai:</label>
                    <input type="number" name="no_pegawai" id="no_pegawai">
                </div>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
    </div>

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

            switch ($bulan) {
                case "01": $bulan = "Januari"; break;
                case "02": $bulan = "Februari"; break;
                case "03": $bulan = "Maret"; break;
                case "04": $bulan = "April"; break;
                case "05": $bulan = "Mei"; break;
                case "06": $bulan = "Juni"; break;
                case "07": $bulan = "Juli"; break;
                case "08": $bulan = "Agustus"; break;
                case "09": $bulan = "September"; break;
                case "10": $bulan = "Oktober"; break;
                case "11": $bulan = "November"; break;
                default: $bulan = "Desember"; break;
            }

            $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
            ?>
            <center>
                <div class="hasil">
                    <?php 
                    echo "Kode Pegawai: " . $no_pegawai . "<br>";
                    echo "No Golongan: " . $no_golongan . "<br>";
                    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
                    echo "No Urutan: " . $no_urutan;
                    ?>
                </div>
            </center>
           <?php
        }
    }
    ?>

</body>
</html>