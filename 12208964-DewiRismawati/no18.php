<!-- <?php 
    $kehadiran;
    $mtk;
    $indo;
    $ing;
    $dpk;
    $agama;
    $nama;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
</head>
<body>
    <h1>Mencari Juara Kelas</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kehadiran</td>
                <td>:</td>
                <td><input type="number" name="kehadiran"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai B.Indo</td>
                <td>:</td>
                <td><input type="number" name="indo"></td>
            </tr>
            <tr>
                <td>Nilai B.Ing</td>
                <td>:</td>
                <td><input type="number" name="ing"></td>
            </tr>
            <tr>
                <td>Nilai Dpk</td>
                <td>:</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td>Nilai Agama</td>
                <td>:</td>
                <td><input type="number" name="agama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kehadiran = $_POST['kehadiran'];
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ing = $_POST['ing'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];

    $data_setiap_siswa[] = [$kehadiran, $mtk, $indo, $ingg, $dpk, $agama,];

    

}

?> -->

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
</head>
<body>
    <h2>Pencarian Juara Kelas</h2>
    <form action="" method="post">
        <?php
        $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "Agama");
        $siswaCount = 15;
        
        for ($i = 1; $i <= $siswaCount; $i++) {
            echo "<h3>Siswa ke-$i</h3>";
            echo "Nama: <input type='text' name='nama[]' required><br>";

            foreach ($mataPelajaran as $mapel) {
                echo "$mapel: <input type='number' name='nilai[$i][$mapel]' required><br>";
            }

            echo "Kehadiran (persentase): <input type='number' name='kehadiran[$i]' required><br>";
            echo "<br>";
        }
        ?>
        <input type="submit" name="submit" value="Cari Juara">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $kehadiran = $_POST['kehadiran'];

        $totalSiswa = count($nilai);
        $juaraKelas = array();
        
        foreach ($nilai as $siswa => $mapelNilai) {
            $nilaiTotal = array_sum($mapelNilai);
            $nilaiRataRata = $nilaiTotal / count($mapelNilai);
            
            if ($nilaiTotal >= 475 && $kehadiran[$siswa] == 100) {
                $juaraKelas[$siswa] = $nilaiRataRata;
            }
        }

        if (empty($juaraKelas)) {
            echo "<h3>Tidak ada juara kelas yang memenuhi kriteria</h3>";
        } else {
            arsort($juaraKelas);
            $juara = key($juaraKelas);

            echo "<h3>Juara Kelas</h3>";
            echo "Nama: " . $_POST['nama'][$juara] . "<br>";
            echo "Nilai Rata-rata: " . $juaraKelas[$juara] . "<br>";
        }
    }
    ?>
</body>
</html>