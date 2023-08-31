<!DOCTYPE html>
<html>
<head>
	<title>nomor gede</title>
</head>
<body>
	<form method="POST" action="">
	<h2>cari angka</h2>
		<label for="num1">Angka 1:</label>
		<input type="number" name="num1" id="num1"><br><br>
		<label for="num2">Angka 2:</label>
		<input type="number" name="num2" id="num2"><br><br>
		<label for="num3">Angka 3:</label>
		<input type="number" name="num3" id="num3"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<br><br>
	<?php
		if(isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];
			//membandingkan angka
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
