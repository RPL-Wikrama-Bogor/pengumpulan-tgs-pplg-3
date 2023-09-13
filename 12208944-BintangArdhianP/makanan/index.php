<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembelian Makanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Makanan</h1>
        <form method="post" action="checkout.php">
            <table>
                <tr>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <?php
                include 'data.php'; 
                foreach ($makanan as $nama => $harga) {
                    echo "<tr>";
                    echo "<td>$nama</td>";
                    echo "<td><strong>Rp " . number_format($harga, 0, ',', '.') . "</strong></td>";
                    echo "<td><input type='number' name='jumlah[$nama]' value='0' min='0'></td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <input type="submit" name="submit" value="Checkout">
        </form>
    </div>
</body>
</html>
