<style>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.siswa {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.input-group {
    margin-bottom: 10px;
}

.input-group label {
    display: inline-block;
    width: 150px;
    font-weight: bold;
}

.input-group input {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 200px;
}

.input-group input[type="number"] {
    width: 60px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.hasil-juara {
    margin-top: 20px;
    border-top: 1px solid #ccc;
    padding-top: 10px;
}

.hasil-juara h3 {
    font-size: 18px;
}

.hasil-juara p {
    font-size: 16px;
    margin: 5px 0;
}
</style>






<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Pencarian Juara Kelas</h2>
        <form action="" method="post">
            <?php
            $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "Agama");
            $siswaCount = 15;
            
            for ($i = 1; $i <= $siswaCount; $i++) {
                echo "<div class='siswa'>";
                echo "<h3>Siswa ke-$i</h3>";
                echo "<div class='input-group'>";
                echo "<label>Nama:</label><input type='text' name='nama[]' required>";
                echo "</div>";

                foreach ($mataPelajaran as $mapel) {
                    echo "<div class='input-group'>";
                    echo "<label>$mapel:</label><input type='number' name='nilai[$i][$mapel]' required>";
                    echo "</div>";
                }

                echo "<div class='input-group'>";
                echo "<label>Kehadiran (persentase):</label><input type='number' name='kehadiran[$i]' required>";
                echo "</div>";

                echo "</div>";
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

                echo "<div class='hasil-juara'>";
                echo "<h3>Juara Kelas</h3>";
                echo "<p>Nama: " . $_POST['nama'][$juara] . "</p>";
                echo "<p>Nilai Rata-rata: " . $juaraKelas[$juara] . "</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>

