<?php
$suhu_fahrenheit;
$suhu_celcius;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mengubah Suhu Fahrenheit ke Suhu Celcius</h1>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="suhu_fahrenheit">Input Suhu Fahrenheit : </label>
            <input type="number" name="s_fahrenheit" id="suhu_fahrenheit">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $suhu_fahrenheit = $_POST['s_fahrenheit'];
    
    $suhu_celcius = ($suhu_fahrenheit - 32) * 5/9; 

    if ($suhu_celcius >= 300) {
        echo " Suhu panas";

    }elseif ($suhu_celcius <= 250) {
        echo " Suhu dingin";

    }else {
        echo " Suhu normal";
    }
   
}