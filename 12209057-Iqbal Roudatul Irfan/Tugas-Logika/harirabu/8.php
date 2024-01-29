<?php
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80,78,82,78,88]
    ],

    [
        'nama' => 'Beni',
        'nilai' => [86,70,80,85,81]
    ],

    [
        'nama' => 'Dani',
        'nilai' => [83,91,70,73,81]
    ],

    [
        'nama' => 'Busi',
        'nilai' => [89,85,84,86,88]
    ],
];

foreach ($students as $student) {
    $jumlahNilai = array_sum($student['nilai']);
    echo "Nama: " . $student['nama'] . "<br>" .  " Jumlah nilai: " . $jumlahNilai . "<br><br>";
}
?>
