<?php
$bil1 = [1, 2, 3];
$bil2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($bil1 as $num1) {
    foreach ($bil2 as $num2) {
        $result = $num1 * $num2;

        if ($result <= 30) {
            echo "$num1 x $num2 = $result\n" . "<br><br>";
        } else {
            break 2; 
        }
    }
}
?>
