<?php 
    $i = 1;
    while ($i <= 50) {
        if ($i % 2 == 0) {
            echo $i . " - Genap <br/>";
        }elseif ($i % 2 == 1) {
            echo $i . " - Ganjil <br/>";
        }
        $i++;
    }
?>