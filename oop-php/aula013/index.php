<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1></h1>
		<pre>
			<?php
			require_once 'Mamifero.php';
			require_once 'Lobo.php';
			require_once 'Cachorro.php';

			$c = new Cachorro();

			$c->reagirFrase("Do you wanna go to the park?");
			$c->reagirFrase("I can't believe you did that");
			?>
		</pre>
	</body>
</html>