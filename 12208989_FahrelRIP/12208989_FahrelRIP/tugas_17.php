<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php

        $max_bil = 20;
        $count = 1;

        while(count <= $max_bil){
            echo " <label for='bilangan_$count' >Masukkan Bilangan $count: </label> ";
            echo " <input type='number' name='bilangan_$count' id='bilangan_$count'><br> ";
            $count++;
        }
        ?>
        <input type="submit" value="Hitung">
         
    </form>
</body>
</html>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
        }
