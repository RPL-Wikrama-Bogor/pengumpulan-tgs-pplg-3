<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pehape">
        <h2>Pembelajaran Array</h2>
    <?php 
    $nilai = [80, 78, 72, 84, 92, 88];

    echo "nilai saya adalah : <b>". implode(", ", $nilai) . "</b>";
    echo "<br><br>";
    echo "nilai terbesar saya adalah : <b>". max($nilai) . "</b>";
    echo "<br><br>";
    echo "nilai terkecil saya adalah : <b>". min($nilai) . "</b>";
    echo "<br><br>";

    sort($nilai);
    echo "jika diurutkan dari yang terkecil : <b>". implode(", ", $nilai) . "</b>";
    echo "<br><br>";
    rsort($nilai);
    echo "jika diurutkan dari yang terbesar : <b>". implode(", ", $nilai) . "</b>";
    echo "<br><br>";

    $rata_rata = array_sum($nilai) / count($nilai);
    echo "nilai rata-rata saya adalah : <b>" . floor($rata_rata) . "</b>";
    echo "<br><br>";
    ?>

    <?php
    $nilai = [80, 78, 72, 84, 92, 88];

    echo "setelah melakukan perbaikan nilai : <b>" . $nilai[2] . "</b> saya mendapatkan nilai<b> 75</b>, ";
    $nilai[2] = 75;
    echo "maka nilai saya adalah sekarang adalah : <b>". implode(", ", $nilai) . "</b>";
    echo "<br><br>";
    rsort($nilai);
    echo "jika diurutkan dari yang terbesar maka nilai saya sekarang adalah : <b>". implode(", ", $nilai) . "</b>";
    ?>
    <p class="pe"><b>- SatriaAgysta</b></p>
    </div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #053B50;
    }

    .pehape {
        height: auto;
        width: 30%;
        background-color: #fff;
        align-items: center;
        margin: 110px auto;
        justify-content: center;
        display: column;
        padding : 10px 20px 30px;
        border-radius: 10px;
    }

    .pe {
        margin-top: 25px;
        font-size: 11px;
        float: right;
    }
</style>

</html>

