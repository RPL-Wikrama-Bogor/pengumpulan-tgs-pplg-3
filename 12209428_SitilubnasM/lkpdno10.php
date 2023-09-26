<?php
$n_pabp;
$n_mtk;
$n_dpk;
$rata;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mencari grade dalam nilai siswa</h2>
    <form action="" method="post">
        <div>
            <label for="npabp">Masukkan Nilai PABP: </label>
            <input type="number" name="pabp" id="npabp"><br>
        </div><br>
        <div>
            <label for="nmtk">Masukkan Nilai MTK: </label>
            <input type="number" name="mtk" id="nmtk"><br>
        </div><br>
        <div>
            <label for="ndpk">Masukkan Nilai DPK: </label>
            <input type="number" name="dpk" id="ndpk"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
     
     $n_pabp = $_POST['pabp'];
     $n_mtk = $_POST['mtk'];
     $n_dpk = $_POST['dpk'];
     
     $rata = ($n_pabp + $n_mtk + $n_dpk) / 3 ;
     
     if($rata <= 100 && $rata >= 80){
         echo "A";
     }else if($rata <= 80 && $rata >= 75){
         echo "B";
     }else if($rata <= 75 && $rata >= 65){
         echo "C";
     }else if($rata <= 65 && $rata >= 45){
         echo "D";
     }else if($rata <= 45 && $rata >= 0){
         echo "E";
     }else{
         echo "Angka tidak memenuhi persyaratan";
     }
 }