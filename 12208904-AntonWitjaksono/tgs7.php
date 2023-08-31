<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung jumlah uang yang dibayarkan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h1 {
        text-align: center;
        padding: 20px;
    }

    form {
        text-align: center;
        margin: 20px auto;
        width: 50%;
    }

    table {
        margin: 0 auto;
    }

    table td {
        padding: 10px;
    }

    input[type="number"],
    input[type="submit"] {
        padding: 8px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    .result {
        text-align: center;
        margin: 20px auto;
        width: 50%;
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
    }
</style>
</head>
<body>
    <h1>Menghitung jumlah uang yang dibayarkan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td></td>
                <td><input type="number" name="gram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
    </form>

    <div class="result">
    <?php
    $total_gram;
    $harga_sebelum;
    $diskon;
    $harga_setelah;

    if(isset($_POST['submit'])){
        $total_gram = $_POST['gram'];

        //proses
        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;
    }

    if(isset($_POST['submit'])){
        echo "Harga Sebelum Diskon = " . $harga_sebelum . "<br>";
        echo "Diskon = " . $diskon . "<br>";
        echo "Harga Setelah Diskon = " . $harga_setelah . "<br>";
    }
    ?>
</div>
</body>
</html>