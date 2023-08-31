<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu dan Info Cuaca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            color: black;   
            text-align: center;
            padding: 10px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Konversi Suhu dan Info Cuaca</h1>
    </header>
    <div class="container">
        <form action="" method="post">
            <label for="farenheit">Inputkan Suhu dalam Fahrenheit: </label>
            <input type="text" name="farenheit" id="farenheit" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        $suhu_farenheit;
        $suhu_celcius;
        $celcius;
        if (isset($_POST["submit"])) {
            $suhu_farenheit = $_POST["farenheit"];
            $celcius = $suhu_farenheit - 32;
            $suhu_celcius = 5 * intval($celcius / 9);
            $info_cuaca = "";

            if ($suhu_celcius > 350) {
                $info_cuaca = "saat ini sangat panas";
            } elseif ($suhu_celcius > 250) {
                $info_cuaca = "saat ini dingin";
            } else {
                $info_cuaca = "saat ini normal";
            }

            echo '<div class="result">';
            echo "Suhu dalam Celcius: $suhu_celcius °C<br>";
            echo $info_cuaca;
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>