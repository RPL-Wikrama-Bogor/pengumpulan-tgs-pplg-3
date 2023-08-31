<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
<?php
function tambahDetik($waktu) {
    $bgian_waktu = explode(':', $waktu);
    
    $jam = intval($bgian_waktu[0]);
    $menit = intval($bgian_waktu[1]);
    $detik = intval($bgian_waktu[2]);
    
    $detikBaru = $detik + 1;
    if ($detikBaru >= 60) {
        $detikBaru = 0;
        $menit += 1;
        if ($menit >= 60) {
            $menit = 0;
            $jam += 1;
            if ($jam >= 24) {
                $jam = 0;
            }
        }
    }
    
    return sprintf('%02d:%02d:%02d', $jam, $menit, $detikBaru);
}

if (isset($_POST['submit'])) {
    $inputWaktu = $_POST['waktu'];
    $waktuBaru = tambahDetik($inputWaktu);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan 1 detik pada waktu</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5C8374;
        }
    
        .card {
            background-color: #CEDEBD;
            border-radius: 10px;
            box-shadow: 2px 8px 20px 0 rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            width: 30%;
            margin: 14% auto 0;
        }
    
        .card h2 {
            margin-top: 2%;
        }
    
        button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            padding: 8px 18px;
            text-align: center;
            font-size: 15px;
            transition-duration: 0.4s;
            margin-top: 7px;
        }
    
        button:hover {
            background-color: #0056b3;
        }
    
        .hasil {
            background-color: #CEDEBD;
            border-radius: 10px;
            box-shadow: 2px 8px 20px 0 rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 30%;
            margin-left: 33%;
            margin-top: 3%;
        }
    </style>
<body>
    <div class="card">
        <h2>Input waktu dan tambah 1 detik</h2>
        <form method="post" action="">
            <label for="waktu">Kirim waktu (hh:mm:ss):</label>
            <input type="text" id="waktu" name="waktu" required>
            <button type="submit" name="submit">Tambahkan 1 detik</button>
        </form>
    </div>

    <div class="hasil">
        <?php if (isset($waktuBaru)) : ?>
            <p>Waktu sesudah ditambahkan 1 detik: <?php echo $waktuBaru; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>