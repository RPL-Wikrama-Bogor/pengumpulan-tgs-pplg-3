<!DOCtipe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(3, 1, 2, 1.20);
            background-color: #FAF0E6;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-group input {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
        .btn-submit {
            padding: 12px 20px;
            background-color: #352F44;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.50s ease; 
        }
        .btn-submit:hover {
            background-color: #5C5470; 
        }
        .result-box {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
            background-color: #B9B4C7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nama : </label>
                <input tipe="text" name="pelanggan" id="name">
            </div>
            <div class="form-group">
                <label for="time">Waktu perhari : </label>
                <input tipe="number" name="waktu" id="time" min="1">
            </div>
            <div class="form-group">
                <label for="tipe_motor">Jenis Motor :</label>
                <select name="tipe_motor" id="tipe_motor">
                    <option hidden>Pilih Motor</option>
                    <option value="scouter">Scouter</option>
                    <option value="motorlistrik">Motorlistrik</option>
                    <option value="beat">Beat</option>
                    <option value="ninja">Ninja</option>
                </select>
            </div>
            <button tipe="submit" class="btn-submit" name="submit">Submit</button>
        </form>
        <div class="result-box">
        <?php
            if(isset($_POST['submit'])){
                $rental = new Rental();
                $pelanggan = $_POST['pelanggan'];
                $tipe_motor = $_POST['tipe_motor'];
                $waktu = $_POST['waktu'];

                // Validasi input $waktu
                if ($waktu <= 0) {
                    echo "Waktu harus lebih dari 0.";
                    exit;
                }

                switch($tipe_motor) {
                    case "Scouter" :
                        $harga_motor = $rental->Scouter;
                         break;
                    case "motorlistrik" : 
                        $harga_motor = $rental->motorlistrik;
                         break;
                    case "beat" : 
                        $harga_motor = $rental->beat;
                         break;
                         case "ninja" : 
                            $harga_motor = $rental->ninja;
                             break;
                    default :
                        $harga_motor = 0;
                         break;
                }
                echo $rental->total_harga($harga_motor, $tipe_motor, $waktu, $pelanggan);
            }
        ?>
        </div>
    </div>
</body>
</html>

<?php
class Pricing {

    protected $users = ['Leo, Dimas, Anugrah'];
    
    public $Scouter   = 300000,
           $motorlistrik = 400000,
           $beat  = 200000,
           $ninja  = 200000;

    protected $tax = 10000,
              $discount = 5/100;

}

class Rental extends Pricing{

    public function total_harga($harga_motor, $tipe, $time, $pelanggan)
    {
        $total = $harga_motor * $time + $this->tax;

        foreach($this->users as $user){
            if($user == $pelanggan){
                $total = $total - ($total  * $this->discount);
                echo $pelanggan . " berstatus sebagai Member mendapat diskon sebesar 5% <br>";
                echo "Jenis motor yang dirental adalah " . $tipe . " selama $time hari<br>";
                echo "harga rental per-harinya adalah : Rp. " . number_format($harga_motor, 0, ',', '.') . "<br><br>";
                echo "besar yang harus di bayarkan adalah : Rp. " . number_format($total, 0, ',', '.');
                exit;
            }else{
                echo $pelanggan . " berstatus sebagai Non Member mendapat diskon sebesar 0% <br>";
                echo "Jenis motor yang dirental adalah " . $tipe . " selama $time hari<br>";
                echo "harga rental per-harinya adalah : Rp. " . number_format($harga_motor, 0, ',', '.'). "<br><br>";
                echo "besar yang harus di bayarkan setelah ditambahkan dengan pajak adalah : Rp. " . number_format($total, 0, ',', '.');
                exit;
            }
        }
    }
}
?>