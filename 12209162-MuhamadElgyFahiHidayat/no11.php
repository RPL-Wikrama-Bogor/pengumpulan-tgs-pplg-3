<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

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
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.result {
    margin-top: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 3px;
}

.result p {
    margin-bottom: 5px;
    color: #141E46;
}

.error {
    color: #ff4c4c;
}

    </style>
    <title>Informasi Pegawai</title>
</head>
<body>
    <div class="container">
        <h1>Informasi Pegawai</h1>
        <form action="" method="post">
            <label for="employeeCode">Kode Pegawai:</label>
            <input type="text" id="employeeCode" name="employeeCode" required placeholder=" Masukan :  Digit">
            <!-- Contoh nilai default: golongan 3, tanggal 22, bulan 05, tahun 1995, nomor urut 05 -->
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $employeeCode = $_POST["employeeCode"];
            if (strlen($employeeCode) == 11) {
                $golongan = $employeeCode[0];
                $tanggal = substr($employeeCode, 1, 2);
                $bulan = substr($employeeCode, 3, 2);
                $tahun = substr($employeeCode, 5, 4);
                $nomorUrut = substr($employeeCode, 9, 2);

                $bulanArr = [
                    "01" => "JANUARI", "02" => "FEBRUARI", "03" => "MARET", "04" => "APRIL",
                    "05" => "MEI", "06" => "JUNI", "07" => "JULI", "08" => "AGUSTUS",
                    "09" => "SEPTEMBER", "10" => "OKTOBER", "11" => "NOVEMBER", "12" => "DESEMBER"
                ];

                // Cek apakah kunci array bulan tersedia sebelum mengakses
                $bulanText = isset($bulanArr[$bulan]) ? $bulanArr[$bulan] : "BULAN TIDAK VALID";

                echo "<div class='result'>";
                echo "<h2>Hasil:</h2>";
                echo "<p>Nomor Golongan: $golongan</p>";
                echo "<p>Tanggal Lahir: $tanggal $bulanText $tahun</p>";
                echo "<p>Nomor Urut: $nomorUrut</p>";
                echo "</div>";
            } else {
                echo "<p class='error'>Kode Pegawai harus 11 digit</p>";
            }
        }
        ?>
    </div>
</body>
</html>