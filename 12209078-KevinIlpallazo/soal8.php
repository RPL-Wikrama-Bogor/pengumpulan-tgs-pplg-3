<!DOCTYPE html>
<html>
<head>
    <title>Pemisahan Angka</title>
</head>
<body>
    <h1>Pemisahan Angka</h1>
    <form method="post" action="">
        Masukkan bilangan bulat: <input type="number" name="bilangan"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bilangan = $_POST['bilangan'];

        // Memisahkan angka menjadi satuan, puluhan, dan ratusan
        $satuan = $bilangan % 10;
        $puluhan = ($bilangan % 100 - $satuan) / 10;
        $ratusan = ($bilangan % 1000 - $puluhan * 10 - $satuan) / 100;

        echo "<p>Bilangan $bilangan memiliki:</p>";
        echo "<p>Satuan: $satuan</p>";
        echo "<p>Puluhan: $puluhan</p>";
        echo "<p>Ratusan: $ratusan</p>";
    }
    ?>
</body>
</html>
