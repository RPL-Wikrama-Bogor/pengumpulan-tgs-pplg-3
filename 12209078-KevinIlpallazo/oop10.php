<!DOCTYPE html>
<html>
<head>
    <title>fiori che sbocciano</title>
</head>
<body>
    <h1>fiori che sbocciano</h1>
    <form method="post" action="">
        Nilai PABP: <input type="number" name="nilai_pabp" min="0" max="100" required><br>
        Nilai Matematika: <input type="number" name="nilai_matematika" min="0" max="100" required><br>
        Nilai DPK: <input type="number" name="nilai_dpk" min="0" max="100" required><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    class NilaiRataRata {
        public function hitungRataRata($pabp, $matematika, $dpk) {
            return round(($pabp + $matematika + $dpk) / 3);
        }

        public function tentukanGrade($rata_rata) {
            if ($rata_rata >= 80 && $rata_rata <= 100) {
                return "A";
            } elseif ($rata_rata >= 75) {
                return "B";
            } elseif ($rata_rata >= 65) {
                return "C";
            } elseif ($rata_rata >= 45) {
                return "D";
            } elseif ($rata_rata >= 0) {
                return "E";
            } else {
                return "K";
            }
        }
    }

    if (isset($_POST['hitung'])) {
        $nilai_pabp = $_POST['nilai_pabp'];
        $nilai_matematika = $_POST['nilai_matematika'];
        $nilai_dpk = $_POST['nilai_dpk'];

        $nilaiRataRataObj = new NilaiRataRata();
        $rata_rata = $nilaiRataRataObj->hitungRataRata($nilai_pabp, $nilai_matematika, $nilai_dpk);
        $grade = $nilaiRataRataObj->tentukanGrade($rata_rata);

        echo "<p>Rata-rata nilai: " . $rata_rata . "</p>";
        echo "<p>Grade: " . $grade . "</p>";
    }
    ?>
</body>
</html>
