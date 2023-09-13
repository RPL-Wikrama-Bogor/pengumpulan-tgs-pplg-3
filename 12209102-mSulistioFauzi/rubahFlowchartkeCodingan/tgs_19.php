<?php 
class Bioskop {
    protected $Ekonomi = 0,
           $Vip = 0,
           $Eksekutif = 0,
           $KeuntunganEkonomi = 7,
           $KeuntunganVip = 0,
           $KeuntunganEksekutif = 0,
           $TotalTiketTerjual = 0,
           $TotalKeuntungan = 0;


    public function __construct($Ekonomi, $Vip, $Eksekutif) 
    {
        if (!is_numeric($Ekonomi) || !is_numeric($Vip) || !is_numeric($Eksekutif)) 
        {
            exit("<p class='error'>Input harus berupa angka</p>");
        } elseif ($Ekonomi > 50 || $Vip > 50 || $Eksekutif > 50) 
        {
            exit("<p class='error'>Input harus diantara 1 - 50</p>");
        }

        $this->Ekonomi = $Ekonomi;
        $this->Vip = $Vip;
        $this->Eksekutif = $Eksekutif;

        $this->TotalTiketTerjual = $Ekonomi + $Vip + $Eksekutif;

        $this->cariKeuntunganVip();
        $this->cariKeuntunganEksekutif();
        $this->TotalKeuntungan = $this->KeuntunganEkonomi + $this->KeuntunganVip + $this->KeuntunganEksekutif;
    }

    public function cariKeuntunganVip() 
    {
        if ($this->Vip >= 35) {
            $this->KeuntunganVip = 25;
        } elseif ($this->Vip >= 20 && $this->Vip <= 35) {
            $this->KeuntunganVip = 15;
        } else {
            $this->KeuntunganVip = 5;
        }
    }

    public function cariKeuntunganEksekutif() 
    {
        if ($this->Eksekutif >= 40) {
            $this->KeuntunganEksekutif = 20;
        } elseif ($this->Eksekutif >= 20 && $this->Eksekutif < 40) {
            $this->KeuntunganEksekutif = 10;
        } else {
            $this->KeuntunganEksekutif = 2;
        }
    }

    public function outputHasil()
    {
        echo "<p class='total output'> Total tiket terjual :" . $this->TotalTiketTerjual . "</p>";
        echo "<p class='outputEkonomi output'> Tiket ekonomi : " . $this->Ekonomi . "</p>";
        echo "<p class='outputVip output'> Tiket Vip : " . $this->Vip . "</p>";
        echo "<p class='outputEksekutif output'> Tiket Eksekutif : " . $this->Eksekutif . "</p>";
        echo "<p class='total output'> Total Keuntungan : " . $this->TotalKeuntungan . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Ekonomi : " . $this->KeuntunganEkonomi . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Vip : " . $this->KeuntunganVip . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Eksekutif : " . $this->KeuntunganEksekutif . "%</p>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD No 19</title>
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap');

* {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.output-container {
    background-color: rgba(181, 188, 216, 0.568);
    max-width: 467px;
    padding: 20px;
    margin: auto;
    margin-top: 30px;
    border-radius: 10px;
    box-shadow:
    0px 12.5px 10px rgba(0, 0, 0, 0.03),
    0px 100px 80px rgba(0, 0, 0, 0.06);
    height: auto;
}

h2 {
    color: rgba(42, 56, 66, 0.705);
    text-align: center;
}

h3 {
    color: rgba(42, 56, 66, 0.685);
    margin-top: 29px;
    text-align: center;
}

.output-container .top-input {
    margin-top: 14px;
}

.output-container input {
    width: 100%;
    margin: 4px 0;
    padding: 6px 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: rgb(48, 74, 114);
}

.output-container input::placeholder {
    color: rgba(48, 74, 114, 0.5);
}

.error {
    margin-top: 15px;
    color: rgba(233, 47, 33, 0.568);
}

.output-container input:focus{
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
    outline-color:rgba(40, 51, 61, 0.37);
}

input[type="submit"] {
    margin-top: 9px;
    font-size: 15px;
    background-color: rgba(42, 56, 66, 0.685);
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 0 auto;
}

.total.output {
    margin-top: 15px;
    color: rgba(42, 56, 66, 0.808);
}

.output {
    margin-top: 2px;
    color: rgba(42, 56, 66, 0.808);
}

.outputEkonomi,
.outputVip,
.outputEksekutif {
    margin-left: 4px;
    color: rgba(67, 85, 99, 0.733);
}

.keuntungan {
    margin-left: 4px;
    color: rgba(67, 85, 99, 0.733);
}

@media (max-width: 600px) {
  .output-container {
    max-width: 90%;
    padding: 10px;
    margin: auto;
  }

  h2 {
    font-size: 19px;
  }

  h3, .output-container input, .output {
    font-size: 14px;
  }

  .output-container input {
    width: 100%;
    margin: 4px 0;
  }
}
    </style>

</head>

<body>
    <div class="output-container">
        <form action="" method="post">
            <h2>Bioskop A</h2>
            <h3>Masukan Total Tiket</h3>
            <input type="text" class="top-input" name="Ekonomi" placeholder="Ekonomi"><br>
            <input type="text" name="Vip" placeholder="VIP"><br>
            <input type="text" name="Eksekutif" placeholder="Eksekutif"><br>
            <input type="submit" name="submit">
        </form>
        <div class="empty-div">
        
            <?php 
            if (isset($_POST["submit"])) {
                if (empty($_POST["Ekonomi"]) && empty($_POST["Vip"]) && empty($_POST["Eksekutif"])) {
                    echo "<p class='error'>Masukan input terlebih dahulu</p>";
                } else {
                    $Ekonomi = $_POST["Ekonomi"];
                    $Vip = $_POST["Vip"];
                    $Eksekutif = $_POST["Eksekutif"];
                    
                    $Bioskop = new Bioskop($Ekonomi,$Vip,$Eksekutif);
                    $Bioskop->outputHasil();
                }
            }
            ?>
        </div>
    </div>
</body>
</html>