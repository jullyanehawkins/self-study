<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
	</head>
	<body>
		<div>
			<form method="get" action="12-2exercicio.php">
				<select name="num">
					<?php
						for($c=1;$c<=10;$c++){
							echo "<option>$c</option>";//vai criar um option de 1 até 10
						}
					?>
				</select>
				<input type="submit" value="Tabuada">
			</form>
		</div>
	</body>
</html>