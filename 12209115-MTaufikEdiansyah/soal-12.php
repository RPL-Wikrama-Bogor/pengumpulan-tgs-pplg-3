<?php
function tambahSatuDetik($jam, $menit, $detik) {
    $detik++;
    if ($detik >= 60) {
        $detik = 0;
        $menit++;
        if ($menit >= 60) {
            $menit = 0;
            $jam++;
            if ($jam >= 24) {
                $jam = 0;
            }
        }
    }
    
    return sprintf('%02d:%02d:%02d', $jam, $menit, $detik);
}

if (isset($_POST['submit'])) {
    $input_jam = $_POST['jam'];
    $input_menit = $_POST['menit'];
    $input_detik = $_POST['detik'];

    $waktu_baru = tambahSatuDetik($input_jam, $input_menit, $input_detik);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Satu Detik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('jam.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        }

        .container {
            background-color: #FFF;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: rgba(255, 255, 255, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border:1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        button {
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="jam">Jam (hh):</label>
            <input type="number" id="jam" name="jam" min="0" max="23" required>
            <label for="menit">Menit (mm):</label>
            <input type="number" id="menit" name="menit" min="0" max="59" required>
            <label for="detik">Detik (ss):</label>
            <input type="number" id="detik" name="detik" min="0" max="59" required>
            <button type="submit" name="submit">Tambah Satu Detik</button>
        </form>
        
        <?php if (isset($waktu_baru)) : ?>
        <div class="result">
            <p><?php echo $waktu_baru; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
