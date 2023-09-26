<style>
        body{
            font-family: 'Poppins', sans-serif;
        }
           .menu, .beli, .hasil{
             outline: auto;
            width: 550px;
            margin: 8px auto;
            padding: 20px;
            border-radius: 15px
           }   

           .beli{
            background-color:#C9D6DF;
            
            
           }
           .beli h1, option{
            text-align:center;
           }
           .beli label{
            
           }
           .beli input[type=number],select {
            width:100%;
            margin-bottom:8px;
            height:25px;
            border-radius:4px;
           }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
            $listfilm = [
                [
                    "film" => "miracle in sell"
                ],
                [
                    "film" => "Frozen II"
                ],
                [
                    "film" => "Fabricated City"
                ]
                ];
                
    ?>
    <div class="menu">
        <center><h1>Daftar film</h1></center>
            <ol>
                <?php
            
                foreach ($listfilm as $lf) {
                    echo "<li> Daftar film : " . $lf['film'] ."</li>";
                }
                ?>
            </ol>
    </div>
    <div class="beli">
            <h1>Pembelian Tiket </h1>
    <form action="" method="post">
        <br>
        <label for="judul">Masukan judul film yang ingin ditonton :</label>
        <select name="data[judul]" id="judul">
        <option hidden>---Pilih---</option>
        <?php
                foreach ($listfilm as $key => $lf) {
                ?>
                    <option value="<?= $key ?>"><?= $lf['film'] ?></option>
                <?php
                }
                ?>
        </select>
        <br>
        <label for="usia">Masukan Usia Anda:</label>
        <input type="number" id="usia" name="data[usia]">
        <br>
        <label for="tiket">Masukan jumlah tiket yang ingin dipesan :</label>
        <input type="number" id="tiket" name="data[tiket]">
        <input type="submit" value="Simpan">
    </div>

    <div class="hasil">
    <?php
if (isset($_POST['data'])) {
    $kasir = $_POST['data'];
    $judul = $kasir['judul'];
    $min = 15;
    $harga = 45000;
   if (15 <= $kasir['usia']) {
        $total = $kasir['tiket'] * $harga;

       echo "judul film yang akan ditonton : " . $listfilm[$judul]['film'];
       echo "<br>";
       echo "total jumlah tiket yang dibeli : " . $kasir['tiket'];
       echo "<br>";
       echo "total harga tiket : Rp." .number_format($total,2,",",".") ;
   }else{
    echo "maaf anda belum cukup umur untuk menonton film ini";
   }
}
?>
    </div>
    </form>
</body>
</html>
