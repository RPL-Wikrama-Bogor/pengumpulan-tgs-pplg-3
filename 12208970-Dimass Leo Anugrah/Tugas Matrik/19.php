<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 10px;
}

.ticket-type {
    margin-bottom: 20px;
}

h3 {
    font-size: 18px;
    margin-bottom: 5px;
}

label {
    font-size: 16px;
    display: block;
    margin-bottom: 5px;
}

input {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 100%;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}

</style>

<!DOCTYPE html>
<html>
<head>
    <title>soal 19</title>
</head>
<body>
    <div class="container">
        <h2>Penghasilan Penjualan Tiket Bioskop</h2>
        <form action="" method="post">
            <div class="ticket-type">
                <h3>Kelas VIP</h3>
                <label>Jumlah Tiket Terjual:</label>
                <input type="number" name="tiket_vip" required>
            </div>

            <div class="ticket-type">
                <h3>Kelas Eksekutif</h3>
                <label>Jumlah Tiket Terjual:</label>
                <input type="number" name="tiket_eksekutif" required>
            </div>

            <div class="ticket-type">
                <h3>Kelas Ekonomi</h3>
                <label>Jumlah Tiket Terjual:</label>
                <input type="number" name="tiket_ekonomi" required>
            </div>

            <br>
            <button type="submit" name="submit">Hitung Penghasilan</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // ... (kode PHP tidak berubah)
        }
        ?>
    </div>
</body>
</html>
