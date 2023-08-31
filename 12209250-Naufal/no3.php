<!DOCTYPE html>
<html>
<head>
	<title>B</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="num1">Bilangan 1:</label>
		<input type="number" name="num1" required><br><br>
		<label for="num2">Bilangan 2:</label>
		<input type="number" name="num2" required><br><br>
		<label for="num2">Bilangan 3:</label>
		<input type="number" name="num3" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$num3 = $_POST["num3"];

			$biggest = $num1;
			if ($num2 > $biggest) {
				$biggest = $num2;
			}
			if ($num3 > $biggest) {
				$biggest = $num3;
			}
			echo "Bilangan terbesar adalah: " . $biggest . "<br><br>";
		}
	?>
</body>
</html>