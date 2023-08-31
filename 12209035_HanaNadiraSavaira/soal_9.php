<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <h2>Konversi Suhu</h2>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="suhu_fahrenheit">Masukkan suhu Fahrenheit</label>
            <input type="number" name="s_fahren" id="suhu_fahrenheit">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>  
    <?php 
    $s_fahren = 0; 
    $s_cel = 0;    

    if (isset($_POST['submit'])) {
        $s_fahren = $_POST['s_fahren'];

        $s_cel = ($s_fahren - 32) * 5/9;

        if ($s_cel > 300) {
            echo "Suhu lebih dari 300 bersuhu panas";
        } elseif ($s_cel > 250) {
            echo "Suhu lebih dari 250 bersuhu dingin";
        } else {
            echo "Suhu normal";
        }
    }
    ?>
</body>
</html>