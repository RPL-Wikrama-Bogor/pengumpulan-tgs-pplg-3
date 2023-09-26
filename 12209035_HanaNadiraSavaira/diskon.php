<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</style>
<body>
   <div class="card">
    <div class="text">
       <center> <h1 style="font-size: 35px;">Kasir Sederhana</h1></center>
    <ol>
        <li>Menu: Nasi Goreng <br>
            Harga: 15.000
        </li>
        <li>Menu: Mie Goreng <br>
            Harga: 14.000
        </li>
        <li>Menu: Udang Tumis <br>
            Harga: 28.000
        </li>
        <li>Menu: Jus Jambu <br>
            Harga: 8.000
        </li>
        <li>Menu: Teh Tarik <br>
            Harga: 8.000
        </li>
</ol>
    <form method="post" action="">
        <label for="makanan">Pilih makanan yang ingin anda pesan : </label>
        <select name="makanan" id="makanan">
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Mie Goreng">Mie Goreng</option>
            <option value="Udang tumis">Udang tumis</option>
        </select><br><br>

        <label for="jumlah_pembelian">Jumlah Pembelian:</label>
        <input type="number" id="jumlah_pembelian" name="jumlah_pembelian" required><br><br>

        <label for="minuman">Pilih minuman yang ingin anda pesan : </label>
        <select name="minuman" id="minuman">
            <option value="Jus Jambu">Jus Jambu</option>
            <option value="Teh Tarik">Teh Tarik</option>
        </select><br><br>

        <label for="jumlah_pembelian_m">Jumlah Pembelian:</label>
        <input type="number" id="jumlah_pembelian_m" name="jumlah_pembelian_m" required><br><br>

        <input type="submit" name="submit" value="Tambah Makanan">
    </form>

    </div>
   </div>
    <?php
    if (isset($_POST['submit'])) { ?>
        <div class="hasil">
       <?php echo "<h2>Struk Pembelian</h2>";
       echo "====================================";
        $makanan = $_POST['makanan'];
        $jumlah_pembelian = $_POST['jumlah_pembelian'];

    
        $harga_m = [
            ['makanan' => 'Nasi Goreng', 'harga' => 15000],
            ['makanan' => 'Mie Goreng', 'harga' => 14000],
            ['makanan' => 'Udang Tumis', 'harga' => 28000],
            ['makanan' => 'Pancake', 'harga' => 10000],
            ['makanan' => 'Waffel', 'harga' => 18000]
        ];

        $harga = 0; 

        foreach ($harga_m as $item) {
             if ($item["makanan"] == $makanan) {
                $harga = $item["harga"];
                break;
            }
        }
        
        $total = $harga * $jumlah_pembelian;
        
        if ($jumlah_pembelian >= 5 ) {
            $diskon = 0.1 * $total;
            $total -= $diskon; ?>
            <div class="hasil">
           <?php echo "<p>Anda mendapatkan diskon 10% di makanan sebesar Rp. " . number_format($diskon) . "</p>"; 

        }   ?>


    <!-- minuman  -->
   <?php if (isset($_POST['submit'])) {
        $minuman = $_POST['minuman'];
        $jumlah_pembelian_m = $_POST['jumlah_pembelian_m'];

    
        $harga_min = [
            ['minuman' => 'Jus Jambu', 'harga' => 8000],
            ['minuman' => 'Teh Tarik', 'harga' => 8000],
        ];

        $harga_m = 0; 

        foreach ($harga_min as $item) {
             if ($item["minuman"] == $minuman) {
                $harga_m = $item["harga"];
                break;
            }
        }
        
        $total_m = $harga_m * $jumlah_pembelian_m;

        if ($jumlah_pembelian_m >= 5) {
            $diskon_m = 0.1 * $total_m;
            $total_m -= $diskon_m; ?>
           <?php echo "<p>Anda mendapatkan diskon 10% di minuman sebesar Rp. " . number_format($diskon_m) . "</p>";
        }  
     
            
            $total_s = $total + $total_m;
            
            ?>
        <?php 
        echo "<p>Jenis makanan & minuman yang anda pesan : <br> >  " . $makanan . " dengan harga Rp. " .  number_format($harga) . "<br> >  " .
                 $minuman . " dengan harga Rp. " . number_format($harga_m) . "</p>";
        echo "<p>Jumlah Pembelian $makanan : " . $jumlah_pembelian . "<br> jumlah pembelian $minuman : " . $jumlah_pembelian_m . "</p>";
        echo "<p>Total Harga: Rp. " . number_format($total) . " + " . "Rp. " .number_format($total_m)  . " = Rp. " . number_format($total_s) . "</p>"; 
    }
    }
    ?>
</div>
</body>
</html>
