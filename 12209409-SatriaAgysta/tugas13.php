<!DOCTYPE html>
<html>
<head>
    <title>Cetak Bilangan</title>
</head>
<body>
    <form method="post" action="">
        Masukkan batas atas: <input type="text" name="batas">
        <input type="submit" value="Cetak">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $batas = $_POST["batas"];

        // Validasi input (pastikan angka yang dimasukkan)
        if (is_numeric($batas)) {
            $batas = intval($batas);
            $i = 1;
            
            echo "Bilangan dari 1 hingga $batas:<br>";
            
            while ($i <= $batas) {
                echo $i . " ";
                $i++;
            }
        } else {
            echo "Masukkan angka yang valid.";
        }
    }
    ?>
</body>
</html>


<!-- 

<?php

for ($i = 1; $i <= 50; $i++) {
    echo $i . " ";
}

?>
