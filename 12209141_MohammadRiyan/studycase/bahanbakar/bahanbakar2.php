<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="" method="post">
    <div class="one" style=""><br>
    <label for="liter">Input Jumlah Liter: </label>
    <input type="number" name="liter" id="liter" required>
    </div>
    <div class="one" style=""><br>
    <label for="jenis">Pilih Jenis Bahan Bakar: </label>
    
    <select name="jenis" required>
        <option value="SSuper">Shell Super</option>
        <option value="SVPower">Shell V-Power</option>
        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
        <option value="SVPowerNitro">Shell V-Power Nitro</option>
    </select>
</div><br><br>
<button type="submit" name="beli">Beli</button>
    </form>
    </center>
</body>
</html>
<?php

require 'login.php';
$login = new Pembelian();
$login->setHarga(10000,15000,18000,20000);
if(isset($_POST['beli'])){
    $login -> selectedClass = $_POST['jenis'];
    $login -> totalLiter = $_POST['liter'];
    $login -> totalHarga();
    $login -> cetakBukti();

}

?>
