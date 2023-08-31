<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
</head>
<body>
    <h2>Kalkulator Diskon</h2>
        <form action="" method="post">
            <div style="display: flex; margin-bottom: 15px;">
                <label for="total_gram">Masukkan total gram</label>
                <input type="number" name="t_gram" id="total_gram">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>  
    <?php 
    $t_gram;
    $h_sblum;
    $diskon;
    $h_stlh;

    if (isset($_POST['submit'])) {
        $t_gram = $_POST['t_gram'];

        $h_sblum = 500 * $t_gram;
        $diskon = 5 * $h_sblum / 100;
        $h_stlh = $h_sblum - $diskon;

        echo "Harga buah sebelum diskon: " . number_format($h_sblum) . "<br>";
        echo "Harga diskon: " . number_format($diskon) . "<br>";
        echo "Harga buah setelah diskon: " . number_format($h_stlh) . "<br>";
    }
    ?>
</body>
</html>