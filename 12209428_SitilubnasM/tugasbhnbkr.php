<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST["submit"])){
  $jumlah_l = $_POST['liter'];
  $jenis = $_POST['bahan'];

  class shell{
    public $d_harga,
           $jenis, 
           $ppn = 0.1;
    public function __construct($jenis, $d_harga){
        $this -> jenis = $jenis;
        $this -> harga = $d_harga;
    }
  }

  class Beli extends shell{
    public $jumlah;

    public function __construct($jenis, $jumlah){
      parent::__construct($jenis, $this -> getHarga($jenis));
      $this -> jenis = $jenis;
      $this -> jumlah = $jumlah;
    }

    public function totalHarga(){
      $subTotal = $this->harga * $this->jumlah;
      $ppn = $subTotal * $this->ppn;
      $total = $subTotal + $ppn;
      return $total;
    }

    public function getHarga($jenis){
      switch ($jenis) {
        case 'Sheel Super';
            return 15420;
        case 'Shell V-Power';
            return 16130;
        case 'Shell V-Power Diesel';
            return 18310;
        case 'Shell V-Power';
            return 16510;
        default:
            return 0;
      }
    }
  }

  $beli = new Beli($jenis, $jumlah_l);
  echo "<center>--------------------------------------------- <br>";
    echo "Anda membeli bahan bakar minyak tipe " . $beli->jenis . "<br>";
    echo "Dengan jumlah " . $beli->jumlah . " liter.<br>";
    echo "Total harga adalah: Rp. " . number_format($beli->totalHarga()) . "<br>";   
    echo "--------------------------------------------- </center><br>";
  
}
?>
  <center>
  <form action="#" method="post">
    <label for="liter">Masukkan Jumlah Liter : </label><br>
    <input type="number" name="liter" id="liter">
    <label for="bahan">Pilih Tipe Bahan Bakar : </label>
        <select name="bahan" id="bahan" >
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>
    <button type="submit" name="submit">Beli</button>
  </form>
  </center>
</body>
</html>