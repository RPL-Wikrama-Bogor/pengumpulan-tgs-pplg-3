<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        p {
            font-size: 18px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Cek Cuaca</h1>
    <form method="post" action="">
        Masukkan temperatur dalam Fahrenheit: <input type="number" name="temperature">
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php if (isset($cuaca)): ?>
        <p>Temperatur dalam Celsius: <?php echo floor($temperatureCelsius); ?></p>
        <p>Cuaca: <?php echo $cuaca; ?></p>
    <?php endif; ?>
</body>
</html>
