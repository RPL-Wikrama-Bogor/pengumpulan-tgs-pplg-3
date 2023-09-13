<!DOCTYPE html>
<html>

<head>
    <title>Pencarian Data Siswa</title>
    <style>
    body {
        font-family: 'Roboto', sans-serif; 
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
        font-family: 'Playfair Display', serif; 
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

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    #greeting-text-container {
        display: flex;
        justify-content: space-between;
    }

    #greeting-text {
        overflow: hidden;
        white-space: nowrap;
        border-right: 2px solid #468B97;
    }

    #time-container {
        background-color: #fff;
        border-radius: 5px;
        padding: 5px 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    #time {
        color: #333;
    }

    /* Card style */
    .card {
        padding: 20px;
        background-color: #468B97;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
</style>

</head>

<body>
    <div class="container">

        <div class="card">
            <div id="greeting-text-container">
                <div id="greeting-text"></div>
                <div id="time-container">
                    <div id="time"></div>
                </div>
            </div>
        </div>

        <h2>Cari Data Siswa berdasarkan Nama:</h2>
        <form method="POST" action="">
            <input type="text" id="nama_cari" name="nama_cari" placeholder="Masukkan nama">
            <button type="submit" name="submit" value="Cari">Cari</button>
        </form>

        <?php

        $data_siswa = [
            [
                'nis' => '12209657',
                'nama' => 'zidan mutakkin',
                'rombel' => 'PPLG XI-3',
                'umur' => 18,
            ],
            [
                'nis' => '12208976',
                'nama' => 'ahmad zulkarnain',
                'rombel' => 'PPLG XI-5',
                'umur' => 16,
            ],
            [
                'nis' => '12207654',
                'nama' => 'naraya humaira',
                'rombel' => 'PPLG XI-6',
                'umur' => 17,
            ],
            [
                'nis' => '12207623',
                'nama' => 'azizah fatimah',
                'rombel' => 'PPLG XI-6',
                'umur' => 16,
            ],
            [
                'nis' => '12207772',
                'nama' => 'nesa agustian',
                'rombel' => 'PMN XI-1',
                'umur' => 17,
            ],
            [
                'nis' => '12207724',
                'nama' => 'raihan eka',
                'rombel' => 'DKV XI-2',
                'umur' => 18,
            ],
            [
                'nis' => '12207873',
                'nama' => 'abdul araya',
                'rombel' => 'PPLG XI-2',
                'umur' => 16,
            ],
            [
                'nis' => '12207436',
                'nama' => 'razief tajudin',
                'rombel' => 'PPLG XI-3',
                'umur' => 18,
            ]

        ];


        function tampilkanDataUmurLebihDari17($data_siswa)
        {

            $siswaUmurLebihDari17 = array_filter($data_siswa, function ($siswa) {
                return $siswa['umur'] > 16;
            });

            echo "<h2>Menampilkan data siswa lebih dari 17 tahun:</h2>";
            echo "<div id='hasil'>";
            if (count($siswaUmurLebihDari17) > 0) {
                echo "<table>";
                echo "<tr><th>NIS</th><th>Nama</th><th>Rombel</th><th>Umur</th></tr>";
                foreach ($siswaUmurLebihDari17 as $siswa) {
                    echo "<tr><td>" . $siswa['nis'] . "</td><td>" . $siswa['nama'] . "</td><td>" . $siswa['rombel'] . "</td><td>" . $siswa['umur'] . " tahun</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data siswa dengan umur lebih dari 17 tahun.";
            }
            echo "</div>";
        }


        function cariDataSiswa($data_siswa, $nama_cari)
        {
            // Menyortir data siswa berdasarkan nama yang cocok
            $siswaDitemukan = array_filter($data_siswa, function ($siswa) use ($nama_cari) {
                return stripos($siswa['nama'], $nama_cari) !== false;
            });


            echo "<h2>Data Siswa dengan Nama '$nama_cari':</h2>";
            echo "<div id='hasil'>";
            if (count($siswaDitemukan) > 0) {
                echo "<table>";
                echo "<tr><th>NIS</th><th>Nama</th><th>Rombel</th><th>Umur</th></tr>";
                foreach ($siswaDitemukan as $siswa) {
                    echo "<tr><td>" . $siswa['nis'] . "</td><td>" . $siswa['nama'] . "</td><td>" . $siswa['rombel'] . "</td><td>" . $siswa['umur'] . " tahun</td></tr>";
                }
                echo "</table>";
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
                if (!empty($nama_cari)) {
                    cariDataSiswa($data_siswa, $nama_cari);
                } else {
                    echo "<h2>Pencarian Nama</h2>";
                    echo "<div id='hasil'>";
                    echo "Silakan masukkan nama untuk memulai pencarian.";
                    echo "</div>";
                }
            }
        }
        ?>
        <h2>Tampilkan Data Siswa dengan Umur > 17 Tahun:</h2>
        <form method="POST" action="">
            <button type="submit" name="umur_lebih_dari_17" value="1">Tampilkan</button>
        </form>
    </div>
    <script>

        var texts = ["Hallo Selamat Datang", "Halo Selamat Siang"];
        var textIndex = 0;
        var textElement = document.getElementById("greeting-text");


        function typeWriter() {
            var text = texts[textIndex];
            var currentText = textElement.textContent;
            if (currentText !== text) {
                textElement.textContent = currentText + text.charAt(currentText.length);
                setTimeout(typeWriter, 100);
            } else {
                setTimeout(eraseText, 4000);
            }
        }

        // Fungsi untuk menghapus teks
        function eraseText() {
            var currentText = textElement.textContent;
            if (currentText.length > 0) {
                textElement.textContent = currentText.slice(0, -1);
                setTimeout(eraseText, 50);
            } else {
                textIndex = (textIndex + 1) % texts.length;
                setTimeout(typeWriter, 500);
            }
        }


        function displayTime() {
            var timeElement = document.getElementById("time");
            var now = new Date();
            var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            timeElement.textContent = now.toLocaleDateString('id-ID', options);
        }


        setTimeout(typeWriter, 1000);
        displayTime();
        setInterval(displayTime, 1000); 
    </script>
</body>

</html>