<?php 
$a = 1;

while ($a <= 50) {
    if ($a <= 50 ) {
        $a = $a + 1;
    }
    if ($a % 2 == 0) {
        echo $a . " Merupakan bilangan genap <br>";
    } elseif ($a % 2 == 1) {
        echo $a . " Merupakan bilangan ganjil <br>";
    }
}