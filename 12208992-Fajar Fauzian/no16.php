<?php
$x = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd and Even Numbers</title>
</head>

<body>
    <div class="result">
        <?php
        for ($i = $x; $i <= 50; $i++) {
            if ($x % 2 == 1) {
                echo $x . " adalah bilangan ganjil<br>";
            } else {
                echo $x . " adalah bilangan genap<br>";
            }
            $x++;
        }
        ?>
    </div>
</body>

</html>