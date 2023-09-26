<?php
$siswa = [
    [
        "nama" => "Satria",
        "nis" => "12209409",
        "rombel" => "PPLG XI-3",
        "rayon" => "Cicurug 5",
        "umur" => 16,
    ],
    [
        "nama" => "Anonim",
        "nis" => "12209999",
        "rombel" => "PPLG XI-3",
        "rayon" => "Wikrama 10",
        "umur" => 17,
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: auto;
            scroll-behavior: smooth;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        body {
            background-image: url('pop.jpeg');
            background-size: cover;
            background-attachment: fixed;
        }

        .keseluruhan {
            height: 60vh;
            width: 50%;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            background-color: #fff;
            padding: 50px;
            margin-top: 110px;
        }
        .h1 {
            height: 50px;
            width: 75%;
            margin: 0 auto;
            justify-content: center;
            position: relative;
            align-items: center;
            color: #efeb19;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #0b0d0d;
            color: #fff;
        }
        .pencarian {
            height: 50px;
            width: 75%;
            margin: 0 auto;
            justify-content: center;
            position: relative;
            align-items: center ;
            padding-bottom: 15vh;
        }
        .siswa {
            height: 50px;
            width: 75%;
            margin: 0 auto;
            justify-content: center;
            position: relative;
            display: flex;
            align-items: center;
            padding: 0;
        }
        .tampil {
            height: 50px;
            width: 75%;
            margin: 0 auto;
            justify-content: center;
            position: relative;
            display: flex;
            align-items: center;
        }
        .bungkus h2{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="keseluruhan">
    <h1 class="h1">Data Siswa</h1>

    <div class="pencarian">
    <h2 style="color: #1f896f;">Cari berdasarkan nama</h2>
    <form method="post">
        <input style="border-radius: 5px; border: 1.5px solid #000;" type="text" name="nama_cari" placeholder="Masukkan nama" required>
        <button style="background-color: #0b0d0d; border: 1.5px solid #000; border-radius: 5px; color: #fff;" type="submit">Cari</button>
    </form>

    <form method="post" style="margin-top: 10px;">
        <button style="background-color: #0b0d0d; border: 1.5px solid #000; border-radius: 5px; color: #fff;" type="submit" name="tampilkan_semua">TAMPILKAN SEMUA DATA SISWA 17 TAHUN</button>
    </form>
    </div>

    <div class="tampil">
    <?php
    if (isset($_POST['nama_cari'])) {
        $nama_cari = $_POST['nama_cari'];
        $found = false;

        foreach ($siswa as $data) {
            if (strpos($data['nama'], $nama_cari) === 0) {
                echo '<table>
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Rombel</th>
                            <th>Rayon</th>
                            <th>Umur</th>
                        </tr>
                        <tr>
                            <td>' . $data['nama'] . '</td>
                            <td>' . $data['nis'] . '</td>
                            <td>' . $data['rombel'] . '</td>
                            <td>' . $data['rayon'] . '</td>
                            <td>' . $data['umur'] . '</td>
                        </tr>
                      </table>';
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo 'Data tidak ada.';
        }
    }

    if (isset($_POST['tampilkan_semua'])) {
        echo '<table>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                    <th>Umur</th>
                </tr>';

        foreach ($siswa as $data) {
            if ($data['umur'] >= 17) {
                echo '<tr>
                        <td>' . $data['nama'] . '</td>
                        <td>' . $data['nis'] . '</td>
                        <td>' . $data['rombel'] . '</td>
                        <td>' . $data['rayon'] . '</td>
                        <td>' . $data['umur'] . '</td>
                      </tr>';
            }
        }

        echo '</table>';
    }
    ?>
    </div>

    <div class="bungkus">
    <h2 style="color: #ad2020;">Siswa</h2>
    <div class="siswa">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
            <?php
            foreach ($siswa as $data) {
                echo '<tr>
                        <td>' . $data['nama'] . '</td>
                        <td>' . $data['umur'] . '</td>
                    </tr>';
            }
            ?>
        </table>
    </div>
    </div>
        </div>
</body>
</html>

