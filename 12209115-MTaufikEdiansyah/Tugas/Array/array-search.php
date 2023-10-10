<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            display: flex;
            justify-content: space-between;
            background-image:url('img/Background.jpg');
            background-size:cover;
        }
        
        .form-container, .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 48%;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter:blur(7px);
            color:#fff;
        }

        h1, h2, h3 {
            color: #fff;
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.2);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            text-align: right;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Form Pencarian Siswa</h1>

        <form method="post">
            <label for="cari">Cari Berdasarkan Nama Siswa:</label>
            <input type="text" id="cari" name="cari">
            <input type="submit" value="Cari">
        </form>
        <br>
        <form method="post">
            <input type="submit" name="tampilkanSemua" value="Tampilkan Seluruh Data Siswa">
            <input type="submit" name="tampilkanUmur17Plus" value="Tampilkan Seluruh Data 17+">
        </form>
    </div>

    <div class="result-container">
        <?php
    $siswa = [
        [
            'nis' => '12209115',
            'nama' => 'Muhammad Taufik Ediansyah',
            'rombel' => 'PPLG XI-3',
            'umur' => 18
        ],
        [
            'nis' => '12209250',
            'nama' => 'Muhammad Naufal Ghaisani',
            'rombel' => 'PPLG XI-3',
            'umur' => 17
        ],
        [
            'nis' => '12208904',
            'nama' => 'Anton Wijaksono',
            'rombel' => 'PPLG XI-3',
            'umur' => 19
        ],
        [
            'nis' => '12209233',
            'nama' => 'Muhammad Fawwaz Zahran',
            'rombel' => 'PPLG XI-3',
            'umur' => 15
        ],
        [
            'nis' => '12208992',
            'nama' => 'Fajar Fauzian',
            'rombel' => 'PPLG XI-3',
            'umur' => 16
        ],
        [
            'nis' => '12209021',
            'nama' => 'Gama Husen',
            'rombel' => 'PPLG XI-3',
            'umur' => 15
        ],
        [
            'nis' => '12209392',
            'nama' => 'Rivaldo Hardianto Wibowo',
            'rombel' => 'PPLG XI-3',
            'umur' => 17
        ],
        [
            'nis' => '12209409',
            'nama' => 'Satria Agista',
            'rombel' => 'PPLG XI-3',
            'umur' => 18
        ]
    ];

        function tampilkanSiswa($siswa, $cari, $umurMin) {
            $hasilDitemukan = false;

            echo "<table>";
            echo "<tr><th>NIS</th><th>Nama</th><th>Rombel</th><th>Umur</th></tr>";

            foreach ($siswa as $data) {
                $nama = $data['nama'];
                $umur = $data['umur'];

                if ((empty($cari) || stripos($nama, $cari) !== false) && (empty($umurMin) || $umur >= $umurMin)) {
                    echo "<tr>";
                    echo "<td>" . $data['nis'] . "</td>";
                    echo "<td>" . $nama . "</td>";
                    echo "<td>" . $data['rombel'] . "</td>";
                    echo "<td>" . $umur . "</td>";
                    echo "</tr>";
                    $hasilDitemukan = true;
                }
            }

            echo "</table>";

            if (!$hasilDitemukan) {
                echo "Tidak ada hasil yang ditemukan.";
            }
        }

        function compareUmur($a, $b) {
            return $a['umur'] - $b['umur'];
        }

        function compareNama($a, $b) {
            return strcmp($a['nama'], $b['nama']);
        }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cari"])) {
        $cari = isset($_POST["cari"]) ? $_POST["cari"] : "";

        if (!empty($cari)) {
            echo "<h2>Hasil Pencarian:</h2>";
            tampilkanSiswa($siswa, $cari, null);
        } else {
            echo "Form harus diisi untuk melakukan pencarian.";
        }
    }

    if (isset($_POST["tampilkanSemua"])) {
        usort($siswa, 'compareUmur');
        echo "<h2>Data Seluruh Siswa:</h2>";
        tampilkanSiswa($siswa, "", null);
    }

    if (isset($_POST["tampilkanUmur17Plus"])) {
        usort($siswa, 'compareUmur');
        echo "<h2>Data Seluruh Siswa Umur 17+</h2>";
        tampilkanSiswa($siswa, "", 17);
    }
}

        
        ?>
    </div>
</body>

</html>
