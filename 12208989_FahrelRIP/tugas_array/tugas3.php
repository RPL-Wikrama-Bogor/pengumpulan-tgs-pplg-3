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
            index: 0;
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
            background-color: #C4D7B2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.5s;
        }

        button:hover {
            background-color: #A0C49D;
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
        $siswa = [
            [
                'nis' => '10000001',
                'nama' => 'Sepuh',
                'rombel' => 'Lulus',
                'umur' => 85,
            ],
            [
                'nis' => '12208989',
                'nama' => 'Fahrel',
                'rombel' => 'PPLG XI-3',
                'umur' => 16,
            ],
            [
                'nis' => '12208888',
                'nama' => 'Si Ganteng 😁👍',
                'rombel' => 'PPLG XI-6',
                'umur' => 17,
            ],
            [
                'nis' => '12200000',
                'nama' => 'si imut',
                'rombel' => 'PPLG XI-5',
                'umur' => 17,
            ],
            // Tambahkan data siswa lainnya di sini
        ];

        // Fungsi untuk menampilkan dan menyortir data siswa yang umurnya > 17
        function tampilkanDataUmurLebihDari17($siswa) {
            // Menyortir data siswa berdasarkan umur > 17
            $siswaUmurLebihDari17 = array_filter($siswa, function($siswa) {
                return $siswa['umur'] > 16;
            });

            // Menampilkan data siswa yang sudah disortir
            echo "<h2>Menampilkan data siswa lebih dari sama dengan 17:</h2>";
            echo "<div id='hasil'>";
            if (count($siswaUmurLebihDari17) > 0) {
                echo "<ul>";
                foreach ($siswaUmurLebihDari17 as $siswa) {
                    echo "<hr><li>NIS: " . $siswa['nis'] . "<br> Nama: " . $siswa['nama'] . "<br> Rombel: " . $siswa['rombel'] . "<br> Umur: " . $siswa['umur'] . " tahun</li><hr>";
                }
                echo "</ul>";
            } else {
                echo "Tidak ada data siswa dengan umur lebih dari 17 tahun.";
            }
            echo "</div>";
        }

        // Fungsi untuk melakukan pencarian berdasarkan nama
        function cariDataSiswa($siswa, $nama_cari) {
            // Menyortir data siswa berdasarkan nama yang cocok
            $siswaDitemukan = array_filter($siswa, function($siswa) use ($nama_cari) {
                return stripos($siswa['nama'], $nama_cari) !== false;
            });

            // Menampilkan hasil pencarian berdasarkan nama
            echo "<h2>Data Siswa dengan Nama '$nama_cari':</h2>";
            echo "<div id='hasil'>";
            if (count($siswaDitemukan) > 0) {
                echo "<ul>";
                foreach ($siswaDitemukan as $data) {
                    echo "<li>NIS: " . $data['nis'] . " <br> Nama: " . $data['nama'] . "<br> Rombel: " . $data['rombel'] . "<br> Umur: " . $data['umur'] . " tahun</li>";
                }
                echo "</ul>";
            } else {
                echo "Tidak ada data siswa dengan nama yang cocok.";
            }
            echo "</div>";
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['umur_lebih_dari_17'])) {
                tampilkanDataUmurLebihDari17($siswa);
            } elseif (isset($_POST['nama_cari'])) {
                $nama_cari = $_POST['nama_cari'];
                cariDataSiswa($siswa, $nama_cari);
            }
        }
        ?>
        <h2>Tampilkan Data Siswa dengan Umur > 17 Tahun:</h2>
        <form method="POST" action="">
            <button type="submit" name="umur_lebih_dari_17" value="1">Tampilkan</button>
        </form>
    </div>
    <svg style="position: absolute; bottom: 0; left: o;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#609966" fill-opacity="1" d="M0,192L60,186.7C120,181,240,171,360,154.7C480,139,600,117,720,138.7C840,160,960,224,1080,234.7C1200,245,1320,203,1380,181.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</body>
</html>