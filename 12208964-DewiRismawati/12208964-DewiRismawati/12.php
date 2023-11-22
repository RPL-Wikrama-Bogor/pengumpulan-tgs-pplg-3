<!DOCTYPE html>
<html>
<head>
    <style>
        /* Gaya CSS untuk halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .time-container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Gaya untuk popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            width: 90%;
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .popup-heading {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .popup-text {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="time-container">
        <form method="post">
            <label for="hours">Jam:</label>
            <input type="text" id="hours" name="hours" placeholder="hh" required>
            <label for="minutes">Menit:</label>
            <input type="text" id="minutes" name="minutes" placeholder="mm" required>
            <label for="seconds">Detik:</label>
            <input type="text" id="seconds" name="seconds" placeholder="ss" required>
            <button type="submit">Tambah 1 Detik</button>
        </form>

        <?php
        function addSecondToTime($hours, $minutes, $seconds) {
            $time = mktime($hours, $minutes, $seconds);
            $newTime = $time + 1;
            return date('H:i:s', $newTime);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputHours = $_POST["hours"];
            $inputMinutes = $_POST["minutes"];
            $inputSeconds = $_POST["seconds"];
                    
            $newTime = addSecondToTime($inputHours, $inputMinutes, $inputSeconds);
        
            // Menggabungkan hasil jam, menit, dan detik dalam satu string
            $inputTime = "$inputHours:$inputMinutes:$inputSeconds";
            
            // Tampilkan hasil dalam popup
            echo "<div id='popup' class='popup'>";
            echo "<div class='popup-content'>";
            echo "<span class='close' id='close-popup'>&times;</span>";
            echo "<p class='popup-heading'>Waktu sebelumnya:</p>";
            echo "<p class='popup-text'>$inputTime</p>";
            echo "<p class='popup-heading'>Waktu setelah ditambah 1 detik:</p>";
            echo "<p class='popup-text'>$newTime</p>";
            echo "</div>";
            echo "</div>";
        
            echo "<script>
                const popup = document.getElementById('popup');
                const closePopup = document.getElementById('close-popup');
        
                // Tampilkan popup
                popup.style.display = 'block';
        
                // Tutup popup
                closePopup.addEventListener('click', function () {
                    popup.style.display = 'none';
                });
            </script>";
        }
        ?>
    </div>
</body>
</html>