<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <style>
        body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(https://media.istockphoto.com/id/1064920666/id/foto/tampilan-malam-spbu-shell.jpg?s=612x612&w=0&k=20&c=94sBmMAc6pgYTg1Vj5IEU2npP3VNtZ2FjPIrapsED9s=);
        background-size: cover;
        }
        .card{
            background-color: rgba( 255, 255, 255, 0.7);
            box-shadow: 0 15px 15px rgba( 0, 0, 0, 0.4);
            max-width: 400px;
            margin: 0 auto;
            padding: 10px;
            border-radius: 50px;
        }
    </style>
</head>
<body class="card">
    <form action="" method="post">
        <div class="one" style="display:flex">
    <label for="liter">Masukkan Liter</label>
    <input type="number" name="liter" id="liter" required>
    </div>
    <div class="one" style="display:flex">
    <label for="jenis">Pilih Jenis Bahan Bakar: </label>
    <select name="jenis" required>
        <option value="S Super">Shell Super</option>
        <option value="S V-Power">Shell V-Power</option>
        <option value="S V-Power Diesel">Shell V-Power Diesel</option>
        <option value="S V-Power Nitro">Shell V-Power Nitro</option>
    </select>
</div>
<button type="submit" name="beli">Beli</button>
    </form>
</body>
</html>
<?php

require 'controler.php';
$logic = new Pembelian();
$logic->setHarga(10000,15000,18000,20000);
if(isset($_POST['beli'])){
    $logic -> jenisYangDipilih = $_POST['jenis'];
    $logic -> totalLiter = $_POST['liter'];
    $logic -> totalHarga();
    $logic -> cetakBukti();

}

?>