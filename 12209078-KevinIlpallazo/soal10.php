<!DOCTYPE html>
<html>
<head>
    <title>Hitung Rata-rata dan Grade</title>
</head>
<body>
    <h1>Hitung Rata-rata dan Grade</h1>
    <form method="post" action="">
        Nilai PABP: <input type="number" name="nilai_pabp"><br>
        Nilai Matematika: <input type="number" name="nilai_matematika"><br>
        Nilai DPK: <input type="number" name="nilai_dpk"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $nilai_pabp = $_POST['nilai_pabp'];
        $nilai_matematika = $_POST['nilai_matematika'];
        $nilai_dpk = $_POST['nilai_dpk'];

        // Hitung rata-rata
        $rata_rata = ($nilai_pabp + $nilai_matematika + $nilai_dpk) / 3;

        // Tentukan grade berdasarkan rata-rata
        if ($rata_rata >= 80 && $rata_rata <= 100) {
            $grade = "A";
        } elseif ($rata_rata >= 75) {
            $grade = "B";
        } elseif ($rata_rata >= 65) {
            $grade = "C";
        } elseif ($rata_rata >= 45) {
            $grade = "D";
        } elseif ($rata_rata >= 0) {
            $grade = "E";
        } else {
            $grade = "K";
        }

        echo "<p>Rata-rata nilai: " . $rata_rata . "</p>";
        echo "<p>Grade: " . $grade . "</p>";
    }
    ?>
</body>
</html>
