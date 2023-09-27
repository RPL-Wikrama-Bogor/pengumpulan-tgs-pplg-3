<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Waktu perhari : </td>
                    <td><input type="number" name="time" min="1"></td>
                </tr>
                <tr>
                    <td>Jenis Motor :</td>
                    <td>
                        <select name="pilihan" id="">
                            <option value="" hidden>Pilih</option>
                            <option value="Aerox">Aerox</option>
                            <option value="Vario">Vario</option>
                            <option value="Vespa">Vespa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        
        <?php
            if(isset($_POST['submit'])){
                $hasil = new user();
                $nama = $_POST['name'];
                $jenis = $_POST['pilihan'];
                $hari = $_POST['time'];

                // Validasi input $hari
                if ($hari <= 0) {
                    echo "Waktu harus lebih dari 0.";
                    exit;
                }

                switch($jenis) {
                    case "Aerox" :
                        $harga = $hasil->Aerox;
                        break;
                    case "Vario" : 
                        $harga = $hasil->Vario;
                        break;
                    case "Vespa" : 
                        $harga = $hasil->Vespa;
                        break;
                    default :
                        $harga = 0;
                        break;
                }
                echo $hasil->userMember($harga, $jenis, $hari, $nama);
            }
        ?>
    </center>
</body>
</html>

<?php
class data {

    protected $user = ['Azka', 'rajip', 'marsya'];
    
    public $Aerox = 200000,
           $Vario = 120000,
           $Vespa = 350000;

    protected $pajak = 10000,
              $diskon = 5/100;

}

class user extends data{

    public function userMember($harga, $pilihan, $hari, $nama)
    {
        $result = $harga * $hari + $this->pajak;

        foreach($this->user as $data){
            if($data == $nama){
                $result = $result - ($result  * $this->diskon);
                echo $nama . " berstatus sebagai Member mendapat diskon sebesar 5% <br>";
                echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
                echo "harga rental per-harinya adalah : Rp. " . number_format($harga, 0, ',', '.') . "<br><br>";
                echo "besar yang harus di bayarkan adalah : Rp. " . number_format($result, 0, ',', '.');
                exit;
            }
        }
        
        // Jika nama tidak ditemukan dalam array user
        echo $nama . " berstatus sebagai Non Member mendapat diskon sebesar 0% <br>";
        echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
        echo "harga rental per-harinya adalah : Rp. " . number_format($harga, 0, ',', '.'). "<br><br>";
        echo "besar yang harus di bayarkan setelah ditambahkan dengan pajak adalah : Rp. " . number_format($result, 0, ',', '.');
    }
}
?>
