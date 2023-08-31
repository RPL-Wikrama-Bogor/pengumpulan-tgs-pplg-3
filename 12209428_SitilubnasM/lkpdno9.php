<?php
$suhu_fahrenhait;
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
    <h2>Menentukan suhu disekitar anda</h2>
    <form action="" method="post">
        <div>
            <label for="sf">Masukkan suhu(fahrenhait): </label>
            <input type="number" name="suhu_f" id="sf"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
<?php
$suhu_fahrenhait = 0;
$suhu_celcius = 0;

if(isset($_POST['submit'])){
    $suhu_fahrenhait = $_POST['suhu_f'];
    $suhu_celcius = ($suhu_fahrenhait - 32) * 5/9 ;
    
    if($suhu_celcius > 300){
        echo "panas";
    }else if($suhu_celcius < 250){
        echo "dingin";
    }else{
        echo "normal";
    }
}