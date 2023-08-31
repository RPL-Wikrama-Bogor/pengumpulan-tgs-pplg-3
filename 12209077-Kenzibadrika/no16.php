<?php

$x = '1';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=$x; $i <= 50; $i++) { 

        if ($x % '2'== '1') {
            echo $x . "bilangan ganjil" ;
            
        }else {
            echo $x . "bilangan genap" ;
        }
        
        $x++;
        
        }
    ?>
</body>
</html>