<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* ... (CSS styles) ... */
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
        /* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
    border-radius: 5px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
    </style>
    <script>
        function showErrorPopup(message) {
            alert(message);
        }

        function validateForm() {
            var employeeCode = document.getElementById("employeeCode").value;
            if (employeeCode.length !== 11) {
                showErrorPopup("Kode Pegawai harus terdiri dari 11 digit.");
                return false;
            }
            return true;
        }

        function showModal(golongan, tanggal, bulanText, tahun, nomorUrut) {
            var modalContent = `
                <h2>INI HASILNYA</h2>
                <p>Nomor Golongan: ${golongan}</p>
                <p>Tanggal Lahir: ${tanggal} ${bulanText} ${tahun}</p>
                <p>Nomor Urut: ${nomorUrut}</p>
            `;
            document.getElementById("modalContent").innerHTML = modalContent;
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
    <title>Informasi Pegawai</title>
</head>
<body>
    <div class="container">
        <h1>Informasi Pegawai</h1>
        <form action="" method="post" onsubmit="return validateForm()">
            <label for="employeeCode">Kode Pegawai:</label>
            <input type="text" id="employeeCode" name="employeeCode" required placeholder="Contoh: 32205199505">
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

                // Tampilkan modal
                echo "<div id='myModal' class='modal'>";
                echo "<div class='modal-content'>";
                echo "<span class='close' onclick='closeModal()'>&times;</span>";
                echo "<div id='modalContent'></div>";
                echo "</div>";
                echo "</div>";
                echo "<script>showModal('$golongan', '$tanggal', '$bulanText', '$tahun', '$nomorUrut');</script>";
            } else {
                echo "<script>showErrorPopup('Kode Pegawai harus terdiri dari 11 digit.');</script>";
            }
        }
        ?>
    </div>
</body>
</html>
