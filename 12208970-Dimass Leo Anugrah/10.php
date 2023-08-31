<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      text-align: center;
      padding: 20px;
    }

    form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      display: inline-block;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    h1 {
      margin-top: 20px;
      font-size: 24px;
    }
  </style>
</head>
<body>
  <form method="POST" action="#">
    <label for="pabp">Nilai PABP</label>
    <input type="text" name="pabp" id="pabp">

    <label for="mtk">Nilai MTK</label>
    <input type="text" name="mtk" id="mtk">

    <label for="dpk">Nilai DPK</label>
    <input type="text" name="dpk" id="dpk">

    <input type="submit" value="Submit" name="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata;
    $rata = ($pabp + $mtk + $dpk) / 3;

    if($rata <= 100 && $rata >= 80){
      echo "<h1>Grade A</h1>";
    }
    elseif($rata <= 80 && $rata >= 75){
      echo "<h1>Grade B</h1>";
    }
    elseif($rata <= 75 && $rata >= 65){
      echo "<h1>Grade C</h1>";
    }
    elseif($rata <= 65 && $rata >= 45){
      echo "<h1>Grade D</h1>";
    }
    elseif($rata <= 45 && $rata >= 0){
      echo "<h1>Grade E</h1>";
    }
    else{
      echo "<h1>Angka tidak memenuhi persyaratan</h1>";
    }
  }
  ?>
</body>
</html>
