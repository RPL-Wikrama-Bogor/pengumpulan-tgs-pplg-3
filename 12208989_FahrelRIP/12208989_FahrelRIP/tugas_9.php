<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suhu Si Fahrel</title>
</head>

<body>
  <h1>Suhu Fahrel</h1>
  <form method="POST" action="">
    <label for="">Input suhu fahrel</label>
    <input type="number" name="suhu_celcius"><br>
    <button type="submit" name="submit">Submit</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $suhu_celcius = $_POST['suhu_celcius'];

    $suhu_fahrenheit = $suhu_celcius / 33.8;

    if ($suhu_celcius > 30) {
      echo "buakarrr";
    } elseif ($suhu_celcius < 25) {
      echo "tirizzz";
    } else {
      echo "aman aja";
    }
  }


  ?>

</body>

</html>