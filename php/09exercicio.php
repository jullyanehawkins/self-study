<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
	</head>
	<body>
		<div>
			<?php
			$c = 0;
			do{
				echo "$c ";
				$c+=2;
			} while ($c <=20);

			$c = 10;
			do{
				echo "$c";
				$c--;
			} while ($c>=1);
			?>
		</div>
	</body>
</html>