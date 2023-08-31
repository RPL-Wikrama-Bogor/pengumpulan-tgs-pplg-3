<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Jeruk</title>
</head>
<body>
    <h2>Kalkulator Harga Jeruk</h2>
    
    <form method="post" action="">
        <label for="berat_jeruk">Berat Jeruk (gram):</label>
        <input type="number" id="berat_jeruk" name="berat_jeruk" min="0"><br><br>
        <input type="submit" value="Hitung Harga">
    </form>
</body>
</html>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat_jeruk_gram = $_POST['berat_jeruk'];
        $harga_per_kg = 500; // 500 rupiah per 100 gram
        $diskon = 0.05; // 5%

        // Menghitung total harga sebelum diskon
        $total_sebelum_diskon = ($berat_jeruk_gram / 1000) * $harga_per_kg;

        // Menghitung besarnya diskon
        $besar_diskon = $total_sebelum_diskon * $diskon;

        // Menghitung total harga setelah diskon
        $total_setelah_diskon = $total_sebelum_diskon - $besar_diskon;

        echo "<p>Berat Jeruk: $berat_jeruk_gram gram</p>";
        echo "<p>Total Harga Sebelum Diskon: " . number_format($total_sebelum_diskon, 2) . " rupiah</p>";
        echo "<p>Besar Diskon: " . number_format($besar_diskon, 2) . " rupiah</p>";
        echo "<p>Total Harga Setelah Diskon: " . number_format($total_setelah_diskon, 2) . " rupiah</p>";
    }
    ?>