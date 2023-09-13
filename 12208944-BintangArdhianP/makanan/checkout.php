<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Invoice Pembelian</h1>
        <table>
            <tr>
                <th>Nama Makanan</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php
            include 'data.php';
            $totalHarga = 0;

            if (isset($_POST['jumlah'])) {
                foreach ($_POST['jumlah'] as $nama => $jumlah) {
                    if ($jumlah > 0) {
                        $harga = $makanan[$nama]; // Ambil harga dari array $makanan
                        $total = $harga * $jumlah;
                        echo "<tr>";
                        echo "<td>$nama</td>";
                        echo "<td>$jumlah</td>";
                        echo "<td><strong>Rp " . number_format($total, 0, ',', '.') . "</strong></td>";
                        echo "</tr>";
                        $totalHarga += $total;
                    }
                }
            }

            // Diskon 10% jika total pembelian lebih dari atau sama dengan 5 biji
            if ($totalHarga >= 5) {
                $diskon = $totalHarga * 0.1;
                $totalHarga -= $diskon;
            }

            echo "<tr>";
            echo "<td colspan='2'><strong>Total Harga (Setelah Diskon)</strong></td>";
            echo "<td><strong>Rp " . number_format($totalHarga, 0, ',', '.') . "</strong></td>";
            echo "</tr>";

            ?>
        </table>
    </div>
</body>

</html>