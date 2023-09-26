<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #468B97;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #F3AA60;
        }

        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #hasil {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cari Data Siswa berdasarkan Nama:</h2>
        <form method="POST" action="">
            <input type="text" id="nama_cari" name="nama_cari" placeholder="Masukkan nama">
            <button type="submit" name="submit" value="Cari">Cari</button>
        </form>

        <?php
        // Data siswa dalam bentuk array asosiatif
        $data_siswa = [
            [
                'nis' => '12209657',
                'nama' => 'Mei Mei',
                'rombel' => 'PPLG XI-3',
                'umur' => 18,
            ],
            [
                'nis' => '12208976',
                'nama' => 'Ipin',
                'rombel' => 'PPLG XI-5',
                'umur' => 16,
            ],
            [
                'nis' => '12207654',
                'nama' => 'Susanti',
                'rombel' => 'PPLG XI-6',
                'umur' => 17,
            ],
            [
                'nis' => '12207762',
                'nama' => 'Upin',
                'rombel' => 'PPLG XI-6',
                'umur' => 17,
            ],
            // Tambahkan data siswa lainnya di sini
        ];

        // Fungsi untuk menampilkan dan menyortir data siswa yang umurnya > 17
        function tampilkanDataUmurLebihDari17($data_siswa) {
            // Menyortir data siswa berdasarkan umur > 17
            $siswaUmurLebihDari17 = array_filter($data_siswa, function($siswa) {
                return $siswa['umur'] > 16;
            });

            // Menampilkan data siswa yang sudah disortir
            echo "<h2>Menampilkan data siswa lebih dari sama dengan 17:</h2>";
            echo "<div id='hasil'>";
            if (count($siswaUmurLebihDari17) > 0) {
                echo "<ul>";
                foreach ($siswaUmurLebihDari17 as $siswa) {
                    echo "<li>NIS: " . $siswa['nis'] . "<br> Nama: " . $siswa['nama'] . "<br> Rombel: " . $siswa['rombel'] . "<br> Umur: " . $siswa['umur'] . " tahun</li>";
                }
                echo "</ul>";
            } else {
                echo "Tidak ada data siswa dengan umur lebih dari 17 tahun.";
            }
            echo "</div>";
        }

        // Fungsi untuk melakukan pencarian berdasarkan nama
        function cariDataSiswa($data_siswa, $nama_cari) {
            // Menyortir data siswa berdasarkan nama yang cocok
            $siswaDitemukan = array_filter($data_siswa, function($siswa) use ($nama_cari) {
                return stripos($siswa['nama'], $nama_cari) !== false;
            });

            // Menampilkan hasil pencarian berdasarkan nama
            echo "<h2>Data Siswa dengan Nama '$nama_cari':</h2>";
            echo "<div id='hasil'>";
            if (count($siswaDitemukan) > 0) {
                echo "<ul>";
                foreach ($siswaDitemukan as $siswa) {
                    echo "<li>NIS: " . $siswa['nis'] . " <br> Nama: " . $siswa['nama'] . "<br> Rombel: " . $siswa['rombel'] . "<br> Umur: " . $siswa['umur'] . " tahun</li>";
                }
                echo "</ul>";
            } else {
                echo "Tidak ada data siswa dengan nama yang cocok.";
            }
            echo "</div>";
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['umur_lebih_dari_17'])) {
                tampilkanDataUmurLebihDari17($data_siswa);
            } elseif (isset($_POST['nama_cari'])) {
                $nama_cari = $_POST['nama_cari'];
                cariDataSiswa($data_siswa, $nama_cari);
            }
        }
        ?>
        <h2>Tampilkan Data Siswa dengan Umur > 17 Tahun:</h2>
        <form method="POST" action="">
            <button type="submit" name="umur_lebih_dari_17" value="1">Tampilkan</button>
        </form>
    </div>
</body>
</html>