<?php
$num1;
$num2;
$num3;
?>

<!DOCTYPE html>
<html>
<head>
	<title>nomor gede</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
	<form method="POST" action="">
	<h2>Cari Angka Terbesar</h2>
		<label for="num1">Angka 1:</label>
		<input type="number" name="num1" id="num1"><br><br>
		<label for="num2">Angka 2:</label>
		<input type="number" name="num2" id="num2"><br><br>
		<label for="num3">Angka 3:</label>
		<input type="number" name="num3" id="num3"><br><br>
		<input style="width: 30vh;" type="submit" name="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];
            if ($num1 > $num2 && $num1 > $num3 ) {
                $biggest = $num1;
            } elseif ($num2 > $num1 && $num2 > $num3 ) {
                $biggest = $num2;
            } else {
                $biggest = $num3; 
            }
			echo "Angka terbesar: " . $biggest;
		}
	?>
</body>
</html>