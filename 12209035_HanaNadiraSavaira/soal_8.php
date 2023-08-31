<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemecahan Bilangan</title>
</head>
<body>
    <h2>Memecahkan Bilangan</h2>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="bil">Masukkan bilangan</label>
            <input type="number" name="bil" id="bil">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>  
    
    <?php 
    $satuan;
    $puluhan;
    $ratusan;

    if (isset($_POST['submit'])) {
        $bil = $_POST['bil'];

        echo "Bilangan: " . $bil . "<br>";
        echo "Satuan: " . ($bil % 10) . "<br>";
        echo "Puluhan: " . (floor($bil / 10) % 10) . "<br>";
        echo "Ratusan: " . (floor($bil / 100)) . "<br>";
    }
    ?>
</body>
</html>