<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Waktu</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
    <h2>Konversi Detik ke Waktu</h2>
    <form method="post" action="">
        <label for="total_detik">Total Detik:</label>
        <input type="number" id="total_detik" name="total_detik" min="0"><br><br>
        <input style="width: 30vh;" type="submit" value="Konversi ke Waktu">
    </form>
</body>
</html> `

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total_detik = $_POST['total_detik'];

        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;

        echo "<p>Total Detik : $total_detik detik <br>
        Waktu : $jam jam $menit menit $detik detik</p>";
}
?>