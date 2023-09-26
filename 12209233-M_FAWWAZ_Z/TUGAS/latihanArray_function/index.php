<!DOCTYPE html>
<html>

<head>
    <title>Pencarian dan Filter Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Pencarian dan Filter Siswa</h1>

    <form method="post">
        <label for="nama">Cari Siswa Berdasarkan Nama:</label>
        <input type="text" id="nama" name="nama">
        <input type="submit" value="Cari">
    </form>

    <form method="post">
        <input type="submit" value="Data U-17" id="usia" name="usia">
    </form>

    <?php
    // Data siswa dalam bentuk array asosiatif
    $data_siswa = array(
        array("nis" => 12209233, "nama" => "Muhammad Fawwaz Zahran", "rombel" => "PPLG XI-3", "umur" => 17),
        array("nis" => 12208939, "nama" => "Bahtiar Abdul Azis", "rombel" => "PPLG XI-3", "umur" => 19),
        array("nis" => 12209115, "nama" => "Muhammad Ferarri", "rombel" => "PPLG XI-3", "umur" => 18),
        array("nis" => 12209897, "nama" => "Ernando Udin", "rombel" => "PPLG XI-3", "umur" => 34),
        array("nis" => 12209250, "nama" => "Frengky  Missa", "rombel" => "PPLG XI-3", "umur" => 15),
        array("nis" => 12209290, "nama" => "Stefano Lilipally", "rombel" => "PPLG XI-3", "umur" => 21),
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nama"])) {
            $nama_cari = $_POST["nama"];
            cariSiswaNama($data_siswa, $nama_cari);
        }
        if (isset($_POST["usia"])) {
            echo '<div class="result">';
            foreach ($data_siswa as $siswa) {
                if ($siswa['umur'] >= 17) {
                    echo '<div class="card">';
                    echo "<h2>" . $siswa['nama'] . "</h2>";
                    echo "<p>NIS: " . $siswa['nis'] . "</p>";
                    echo "<p>Rombel: " . $siswa['rombel'] . "</p>";
                    echo "<p>Umur: " . $siswa['umur'] . "</p>";
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }

    // Fungsi untuk mencari data siswa berdasarkan nama (dapat mencari berdasarkan salah satu kata dalam nama)
    function cariSiswaNama($data_siswa, $nama_cari)
    {
        echo '<div class="result">';
        $nama_ditemukan = false; // Inisialisasi variabel untuk mengecek apakah nama ditemukan
        foreach ($data_siswa as $siswa) {
            $nama_lengkap = $siswa['nama'];
            // Ubah nama siswa dan kata pencarian menjadi huruf kecil untuk pencarian yang tidak bersifat case-sensitive
            $nama_lengkap = strtolower($nama_lengkap);
            $nama_cari = strtolower($nama_cari);
            if (strpos($nama_lengkap, $nama_cari) !== false) {
                echo '<div class="card">';
                echo "<h2>" . $siswa['nama'] . "</h2>";
                echo "<p>NIS: " . $siswa['nis'] . "</p>";
                echo "<p>Rombel: " . $siswa['rombel'] . "</p>";
                echo "<p>Umur: " . $siswa['umur'] . "</p>";
                echo '</div>';
                $nama_ditemukan = true; // Setel menjadi true jika nama ditemukan
            }
        }
        // Tampilkan pesan jika nama tidak ditemukan
        if (!$nama_ditemukan) {
            echo "<h2>Nama '$nama_cari' tidak ditemukan.</h2><br>";
        }
        echo '</div>';
    }
    ?>

</body>

</html>