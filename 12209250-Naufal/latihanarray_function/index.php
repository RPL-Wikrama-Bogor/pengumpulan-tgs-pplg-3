<!DOCTYPE html>
<html lang="en">
<head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Comfortaa&family=Gluten&family=Nunito:wght@600&family=Sedgwick+Ave+Display&display=swap');

        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            font-family: 'Comfortaa', cursive;
            background-image: url(img/otop.jpeg);
            color: #fff;
        }

        h1, h2, h3 {
            color: #fff;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(7px);
            color: #fff;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
            text-align: center;
        }

        input[type="text"], input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-bottom: 10px;
            background-color: #fff; 
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(7px);
            color: #fff;
        }

        input[type="submit"] {
            background-color: #FF1493;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            margin-top: 10px;
            font-family: 'Comfortaa', cursive;
        }

        input[type="submit"]:hover {
            background-color: #FF69B4;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: right;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 0px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(7px);
            color: #fff;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #FF1493;
        }
    </style>
</head>
<body>
    <h1>Mencari Data Siswa</h1>

    <form method="post" onsubmit="return validateForm()">
        <label for="cari">Cari Siswa Berdasarkan Nama :</label>
        <input type="text" id="cari" name="cari" required>
        <input type="submit" value="Cari">
    </form>
    <br>
    <form method="post">
        <input type="submit" name="tampilkanSemua" value="Tampilkan Seluruh Data Siswa">
        <input type="submit" name="tampilkanUmur17" value="Tampilkan Data Siswa 17 Tahun Ke Atas">
    </form>

    <?php
    // Data siswa dalam bentuk array asosiatif
    $siswa = [
        [
            'nis' => '12209250',
            'nama' => 'Muhammad Naufal Ghaisani',
            'rombel' => 'PPLG XI-3',
            'umur' => 16
        ],
        [
            'nis' => '12208904',
            'nama' => 'Anton Wijaksono',
            'rombel' => 'PPLG XI-3',
            'umur' => 16
        ],
        [
            'nis' => '12209233',
            'nama' => 'Muhammad Fawwaz Zahran',
            'rombel' => 'PPLG XI-3',
            'umur' => 16
        ],
        [
            'nis' => '12208992',
            'nama' => 'Fajar Fauzian',
            'rombel' => 'PPLG XI-3',
            'umur' => 15
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
            'umur' => 18
        ],
        [
            'nis' => '12209115',
            'nama' => 'Muhammad Taufik Ediansyah',
            'rombel' => 'PPLG XI-3',
            'umur' => 20
        ],
        [
            'nis' => '12209409',
            'nama' => 'Satria Agysta',
            'rombel' => 'PPLG XI-3',
            'umur' => 17
        ]
    ];

    // Fungsi untuk menampilkan data siswa sesuai dengan kriteria
    function tampilkanSiswa($siswa, $cari, $umurMin) {
        $hasilDitemukan = false;

        echo "<table>";
        echo "<tr><th>NIS</th><th>Nama</th><th>Rombel</th><th>Umur</th></tr>";

        foreach ($siswa as $data) {
            $nama = $data['nama'];
            $umur = $data['umur'];

            if ((empty($cari) || stripos($nama, $cari) !== false) && $umur >= $umurMin) {
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
            echo "<b>Tidak ada hasil yang ditemukan.</b>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["cari"])) {
            $cari = isset($_POST["cari"]) ? $_POST["cari"] : "";
            echo "<h2>Hasil Pencarian:</h2>";
            tampilkanSiswa($siswa, $cari, 0);
        }

        if (isset($_POST["tampilkanSemua"])) {
            echo "<h2>Data Seluruh Siswa:</h2>";
            tampilkanSiswa($siswa, "", 0);
        }

        if (isset($_POST["tampilkanUmur17"])) {
            echo "<h2>Data Siswa 17 Tahun Ke Atas:</h2>";
            tampilkanSiswa($siswa, "", 17);
        }
    }
    ?>

    <script>
        function validateForm() {
            var cariInput = document.getElementById('cari');
            if (cariInput.value.trim() === "") {
                alert("Form harus diisi.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
