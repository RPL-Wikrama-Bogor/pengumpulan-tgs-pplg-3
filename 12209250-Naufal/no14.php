<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no14</title>
</head>
<body>
    <h3>Bilangan genap 1-50</h3>
    <?php
        $i = 1;
        while($i <=50){
            if($i % 2 !=0){
                echo $i . " ";
            }
            $i++;
        }
    ?>
</body>
</html>