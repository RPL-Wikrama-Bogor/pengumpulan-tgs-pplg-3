<!DOCTYPE html>
<html>

<head>
    <title>Menambah 1 Detik pada Waktu</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #9EB384;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 80%; /* Adjust container width as needed */
}
.img {
    width:600px; 
    height: 300px; 
    max-width: 100%;
}

h1 {
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

label {
    margin-bottom: 10px;
    color: #666;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    margin-bottom: 15px;
}

button[type="submit"] {
    background-color: #435334;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #CEDEBD;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
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

.back-button {
    background-color: red;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    text-decoration: none;
}

.back-button:hover {
    background-color: #EF6262;
}

@media (max-width: 768px) {
    .container {
        width: 30%; 
    }
    .img{
        width: 300px;
        height: 100px;
    }
    h1{
        font-size: 20px;
    }
}
@media (max-width: 1406px){
    .container {
        width: 20%; 
        height: 30%;
}
.img{
        width: 300px;
        height: 100px;
    } 
}

    </style>
</head>

<body>
<div class="container">
        <img class="img" src="bannern11.png" alt="Banner">
        <h1>Menambah 1 Detik pada Waktu</h1>
        <form action="" method="post">
            <label for="inputTime">Masukkan Waktu (hh:mm:ss):</label>
            <input type="text" id="inputTime" name="inputTime" required placeholder="Contoh: 23:59:59">
            <button type="submit">submit</button>
        </form>
        <?php
        function addOneSecond($time)
        {
            $dateTime = new DateTime($time);
            $dateTime->add(new DateInterval('PT1S')); // Add 1 second
            return $dateTime->format('H:i:s');
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputTime = $_POST["inputTime"];
            $newTime = addOneSecond($inputTime);
            echo "<div id='myModal' class='modal' style='display: block;'>";
            echo "<div class='modal-content'>";
            echo "<span class='close' id='closeModal'>&times;</span>";
            echo "<p>Waktu setelah ditambah 1 detik: <b>$newTime</b></p>";
            echo "<a class='back-button' href='javascript:history.go(-1)'>Kembali</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>

        <script>
            document.getElementById("closeModal").addEventListener("click", function () {
                document.getElementById("myModal").style.display = "none";
            });
        </script>
</body>

</html>