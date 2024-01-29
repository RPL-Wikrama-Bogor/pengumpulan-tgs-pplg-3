<?php
$students = [
    [
        "nama" => "Iqbal Roudatul Irfan",
        "nis" => 12209057,
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 6"
    ],
    [
        "nama" => "Razief",
        "nis" => 12208726,
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 5"
    ]
    ];
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach( $students as $student) : ?>
    <ul>
        <li>Nama : <?= $student["nama"]; ?></li>
        <li>Nis : <?= $student["nis"]; ?></li>
        <li>Rombel : <?= $student["rombel"]; ?></li>
        <li>Rayon : <?= $student["rayon"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>