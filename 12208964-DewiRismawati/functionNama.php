<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ccc;
            border-radius: 5px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: darkgray;
            color: #040D12;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.10s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #CEEDC7;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

    #waktu {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Gaya untuk tanggal */
    #waktu p:first-child {
        margin-bottom: 5px;
    }

    /* Gaya untuk jam */
    #waktu p:last-child {
        margin-top: 5px;
    }
    </style>
</head>

<body>
<div class="container">
<h2>Waktu Saat Ini :</h2>
        <div id="waktu"></div> <!-- Menampilkan waktu di sini -->

        <script>
            function updateWaktu() {
                const waktuElement = document.getElementById("waktu");
                const sekarang = new Date();
                const tanggal = sekarang.toLocaleDateString("id-ID", {
                    weekday: "long",
                    day: "numeric",
                    month: "long",
                    year: "numeric",
                });
                const jam = sekarang.toLocaleTimeString("id-ID");
                waktuElement.innerHTML = `<p>Tanggal: ${tanggal}</p><p>Jam: ${jam}</p>`;
            }

            // Pemutakhiran waktu setiap detik
            setInterval(updateWaktu, 1000);

            // Panggil fungsi pertama kali saat halaman dimuat
            updateWaktu();
        </script>


        <h2>Cari Data Siswa berdasarkan Nama:</h2>
        <form method="POST" action="">
            <input type="text" id="nama_cari" name="nama_cari" placeholder="Masukkan nama" style="background-color: #f0f0f0;">
            <button type="submit" name="submit" value="Cari">Cari</button>
        </form>
        <?php
        // Data siswa dalam bentuk array asosiatif
        $data_siswa = [
            [
                'nis' => '12209657',
                'nama' => 'Rin',
                'rombel' => 'PPLG XI-3',
                'umur' => 20,
            ],
            [
                'nis' => '12297880',
                'nama' => 'Rival',
                'rombel' => 'PPLG XI-3',
                'umur' => 20,
            ],
            [
                'nis' => '12280978',
                'nama' => 'Tegar Alwan',
                'rombel' => 'PPLG XI-3',
                'umur' => 17,
            ],
            [
                'nis' => '12209887',
                'nama' => 'Ica intan putri',
                'rombel' => 'PPLG XI-3',
                'umur' => 21,
            ],
            [
                'nis' => '12209765',
                'nama' => 'Ananda putra',
                'rombel' => 'PPLG XI-3',
                'umur' => 19,
            ],
            [
                'nis' => '12207333',
                'nama' => 'Zacky',
                'rombel' => 'PPLG XI-3',
                'umur' => 18,
            ],
            [
                'nis' => '12202347',
                'nama' => 'Inta putri',
                'rombel' => 'PPLG XI-3',
                'umur' => 17,
            ],
            // Tambahkan data siswa lainnya di sini
        ];

        // Fungsi untuk menampilkan dan menyortir data siswa yang umurnya > 17
        function tampilkanDataUmurLebihDari17($data_siswa)
        {
            // Menyortir data siswa berdasarkan umur > 17
            $siswaUmurLebihDari17 = array_filter($data_siswa, function ($siswa) {
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
        function cariDataSiswa($data_siswa, $nama_cari)
        {
            // Menyortir data siswa berdasarkan nama yang cocok
            $siswaDitemukan = array_filter($data_siswa, function ($siswa) use ($nama_cari) {
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
                echo "<center>Tidak ada data siswa dengan nama yang cocok.</center>";
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
</body>

</html>
