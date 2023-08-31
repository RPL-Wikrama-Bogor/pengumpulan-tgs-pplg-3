<?php
$a = "";
$b = "";
$c = "";

if (isset($_POST["submit"])) {
    $a = $_POST["angka_a"];
    $b = $_POST["angka_b"];
    $c = $_POST["angka_c"];

    if ($a >= $b && $a >= $c) {
        $angka_terbesar = "angka terbesar adalah a";
    } elseif ($b > $c && $b > $a) {
        $angka_terbesar = "angka terbesar adalah b";
    } else {
        $angka_terbesar = "angka terbesar adalah c";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: no-repeat;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0;
        }

        input[type="text"] {
            width: 100px;
            padding: 5px;
            margin: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
        }

    </style>
</head>

<body>
    <div class="content">
        <h2>Perbandingan Angka</h2>
        <form action="" method="post">
            <label for="angka_a">A</label>
            <input type="text" name="angka_a" id="angka_a" required>
            <label for="angka_b">B</label>
            <input type="text" name="angka_b" id="angka_b" required>
            <label for="angka_c">C</label>
            <input type="text" name="angka_c" id="angka_c" required>
            <button type="submit" name="submit">TEST</button>
        </form>

        <?php if (isset($_POST["submit"])) : ?>
            <div class="result">
                <p><?= $angka_terbesar ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>