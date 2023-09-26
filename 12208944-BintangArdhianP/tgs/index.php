<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bahan Bakar</title>
</head>
<body>
    <div class="container">
        <h1>Transaksi Bahan Bakar</h1>
        <img src="img/1.png" alt="Shell logo" width= 90px>
        <h2>Daftar Harga</h2>
        <ul>
            <li>Harga Shell Super: Rp. 15.420,00</li>
            <li>Harga Shell V-Power: Rp. 16.130,00</li>
            <li>Harga Shell V-Power Diesel: Rp. 18.310,00</li>
            <li>Harga Shell V-Power Nitro: Rp. 16.510,00</li>
        </ul>
        <h2>Transaksi</h2>
        <form action="transaksi.php" method="POST">
            <label for="jenis">Jenis Bahan Bakar:</label>
            <select name="jenis" id="jenis">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <label for="jumlah">Jumlah (liter):</label>
            <input type="number" name="jumlah" id="jumlah" required>
            <input type="submit" value="Hitung Total">
        </form>
    </div>
</body>
</html>
