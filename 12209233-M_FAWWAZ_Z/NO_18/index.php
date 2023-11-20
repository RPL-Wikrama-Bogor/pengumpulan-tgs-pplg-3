<!DOCTYPE html>
<html>

<head>
    <title>Cari Juara Kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Mencari Juara Kelas</h2>
    <form method="post" action="">
        <label for="nama">Nama Siswa:</label>
        <input style=" width: 45vh;" type="text" id="nama" name="nama" required placeholder="Masukan Nama"><br><br>

        <label for="indo">Nilai Bahasa Indonesia:</label>
        <input style=" width: 45vh;" type="number" id="indo" name="indonesia" required placeholder="Masukan Nilai B Indo"><br><br>

        <label for="mtk">Nilai Matematika:</label>
        <input style=" width: 45vh;" type="number" id="mtk" name="matematika" required placeholder="Masukan Nilai MTK"><br><br>


        <label for="ingg">Nilai Bahasa Inggris:</label>
        <input style=" width: 45vh;" type="number" id="ingg" name="english" required placeholder="Masukan Nilai English"><br><br>

        <label for="agama">Nilai Agama:</label>
        <input style=" width: 45vh;" type="number" id="agama" name="agama" required placeholder="Masukan Nilai Agama"><br><br>


        <label for="dpk">Nilai DPK:</label>
        <input style=" width: 45vh;" type="number" id="dpk" name="dpk" required placeholder="Masukan Nilai DPK"><br><br>

        <label for="kehadiran">Kehadiran (100%):</label>
        <input style=" width: 45vh;" type="number" id="kehadiran" name="kehadiran" required placeholder="Masukan Kehadiran"><br><br>

        <input type="submit" name="submit" value="Cari Juara Kelas">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $matematika = $_POST['matematika'];
        $indonesia = $_POST['indonesia'];
        $english = $_POST['english'];
        $dpk = $_POST['dpk'];
        $agama = $_POST['agama'];
        $kehadiran = $_POST['kehadiran'];

        // Menghitung nilai rata-rata
        $rata_rata = ($matematika + $indonesia + $english + $dpk + $agama);

        // Mengecek jika nilai rata-rata >= 475 dan kehadiran = 100%
        if ($rata_rata >= 475 && $kehadiran == 100) {
            echo "<p style='color:green;'>Selamat, " . $_POST['nama'] . " adalah juara kelas!</p>";
        } else {
            echo "<p style='color:red;'>Mohon Maaf, " . $_POST['nama'] . " belum memenuhi persyaratan juara kelas.</p>";
        }
    }
    ?>
</body>

</html>