<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
  <h2>Input Nilai Satria</h2>
  <form method="POST" action="#">
    <tr>
      <label for="NilaiPABP">Nilai PABP :</label>
      <input type="number" name="pabp" id="pabp" min="0" max="100">
    </tr><br>
    <tr>
      <label for="NIlaiMTK">Nilai MTK : </label>
      <input type="number" name="mtk" id="mtk" min="0" max="100">
    </tr><br>
    <tr>
      <label for="NilaiDPK">Nilai DPK : </label>
      <input type="number" name="dpk" id="dpk" min="0" max="100">
    </tr><br><br>
    <input style="width: 30vh;" type="submit" value="Submit" name="submit">
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata;
    $rata = ($pabp + $mtk + $dpk) / 3;

    if($rata <= 100 && $rata >= 80){
        echo "<br><b>Grade A</b><br>";
        echo "Rata-rata : ";
        echo $rata;
    }
    elseif($rata <= 80 && $rata >= 75){
        echo "<br><b>Grade B</b><br>";
        echo "Rata-rata : ";
        echo $rata;
    }
    elseif($rata <= 75 && $rata >= 65){
        echo "<br><b>Grade C</b><br>";
        echo "Rata-rata : ";
        echo $rata;
    }
    elseif($rata <= 65 && $rata >= 45){
        echo "<br><b>Grade D</b><br>";
        echo "Rata-rata : ";
        echo $rata;
    }
    elseif($rata <= 45 && $rata >= 0){
        echo "<br><b>Grade E</b><br>";
        echo "Rata-rata : ";
        echo $rata;
    }
    else{
      echo "Angka tidak memenuhi persyaratan";
    }
  }
  ?>
</body>
</html>