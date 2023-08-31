<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>

<body>
    <form action="" method="post">
        <div class="input-container">
            <label for="jam">Masukkan jam</label>
            <input type="number" name="jam" id="jam">
        </div>

        <div class="input-container">
            <label for="menit">Masukkan menit</label>
            <input type="number" name="menit" id="menit">
        </div>

        <div class="input-container">
            <label for="detik">Masukkan detik</label>
            <input type="number" name="detik" id="detik">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam2 = $jam * 3600;
        $menit2 = $menit * 60;
        $hasil = $jam2 + $menit2 + $detik;
        echo "<p class='hasil'>Hasil konversi: $hasil detik</p>";
    }
    ?>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .input-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        font-size: 16px;
        margin-bottom: 5px;
    }

    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #45a049;
    }

    .hasil {
        font-size: 18px;
        margin-top: 20px;
    }
</style>