<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Informasi Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="result">
        <h1>Informasi Pegawai : </h1>
        <?php
        // Periksa apakah formulir telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai kode pegawai dari formulir
            $kode_pegawai = $_POST["kode_pegawai"];

            // Pastikan kode pegawai memiliki panjang yang benar (11 karakter)
            if (strlen($kode_pegawai) == 11) {
                // Ekstrak informasi dari kode pegawai
                $golongan = substr($kode_pegawai, 0, 1);
                $tanggal_lahir = substr($kode_pegawai, 1, 8);
                $dd = substr($tanggal_lahir, 0, 2);
                $mm = substr($tanggal_lahir, 2, 2);
                $yyyy = substr($tanggal_lahir, 4, 4);
                $nomor_urut = substr($kode_pegawai, 9);

                // Konversi bulan ke nama bulan
                $nama_bulan = date("F", mktime(0, 0, 0, $mm, 1, $yyyy));

                // Cetak informasi pegawai
                echo "Golongan : " . $golongan . "<br>";
                echo "Tanggal Lahir : " . $dd . "-" . $nama_bulan . "-" . $yyyy . "<br>";
                echo "Nomor Urut : " . $nomor_urut;
                echo '<br><br><a href="no11.php" class="back-button">Back</a>';
            } else {
                echo "Kode Pegawai harus memiliki 11 karakter.";
                echo '<br><br><a href="no11.php" class="back-button">Back</a>';
            }
        }
        ?>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0; z-index: -1;">
    <path fill="#3979bd" fill-opacity="1" d="M0,96L34.3,112C68.6,128,137,160,206,186.7C274.3,213,343,235,411,224C480,213,549,171,617,170.7C685.7,171,754,213,823,218.7C891.4,224,960,192,1029,160C1097.1,128,1166,96,1234,85.3C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</body>
</html>
