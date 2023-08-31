<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuGysta</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
          font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #040D12;
            color: fff;
        }

        h2 {
            text-align: center;
            color: #fff;
        }

        form {
            text-align: left;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            background-color: #183D3D;
            width: 300px;
            position: relative;
        }

        label {
            font-weight: bold;
            color: #fff;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #93B1A6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #99B1A9;
            transform: scale(1.05);
        }

        .pe {
          font-size: 10px; /* Ukuran font yang lebih kecil */
          position: absolute; /* Posisi absolut untuk pemosisian bebas */
          top: 160px; /* Sesuaikan dengan jarak yang Anda inginkan dari input */
          color: #5C8374 ;
          left: 20px;
        }

    </style>
</head>

<body>
    <form method="POST" action="">
    <h2>SuGysta</h2>
        
    <label for="suhu_celcius">Input Suhu :</label><br>
    <input style="width: 35vh;" type="number" name="suhu_celcius" id="suhu_celcius" placeholder="hanya angka" required><br><br>
    <p class="pe"><span style="color: blueice;">*suhu otomatis menjadi celcius</span></p>
    <button type="submit" name="submit">Submit</button>

    <?php
      if (isset($_POST['submit'])) {
          $suhu_celcius = $_POST['suhu_celcius'];
          $suhu_fahrenheit = $suhu_celcius / 33.8;

          if ($suhu_celcius > 70) {
            echo '<p style="color: #fff;"> Panas Neraka 💀</p>';
        } elseif ($suhu_celcius <= 70 && $suhu_celcius >= 30) {
            echo '<p style="color: #fff;"> Suhu panas 🥵</p>';
        } elseif ($suhu_celcius < 30 && $suhu_celcius >= 10) {
            echo '<p style="color: #fff;"> Suhu Normal 😌</p>';
        } else {
            echo '<p style="color: #fff;"> Suhu Dingin 🥶</p>';
        }
        
      }
    ?>

    </form>
</body>

</html>
