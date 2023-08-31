<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>
<body>
  <form method="POST" action="#">
    <tr>
      <label for="NilaiPABP">Nilai PABP</label>
      <input type="text" name="pabp" id="pabp">
    </tr>
    <tr>
      <label for="NIlaiMTK">Nilai MTK</label>
      <input type="text" name="mtk" id="mtk">
    </tr>
    <tr>
      <label for="NilaiDPK">Nilai DPK</label>
      <input type="text" name="dpk" id="dpk">
    </tr>
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
      echo "Grade A";
    }
    elseif($rata <= 80 && $rata >= 75){
      echo "Grade B";
    }
    elseif($rata <= 75 && $rata >= 65){
      echo "Grade C";
    }
    elseif($rata <= 65 && $rata >= 45){
      echo "Grade D";
    }
    elseif($rata <= 45 && $rata >= 0){
      echo "Grade E";
    }
    else{
      echo "Angka tidak memenuhi persyaratan";
    }
  }
  ?>
</body>
</html>