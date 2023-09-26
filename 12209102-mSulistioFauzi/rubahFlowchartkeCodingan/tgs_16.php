<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }
</style>

<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 != 0) {
        echo "<b>" . $i . "</b>" . "  : bil ganjil<br>";
    } else  {
        echo "<i>" . $i . "</i>" .  " : bil genap<br>";
    }
}
?>