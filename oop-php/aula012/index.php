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
			require_once 'Reptil.php';
			require_once 'Peixe.php';
			require_once 'Ave.php';
			require_once 'Canguru.php';
			require_once 'Cachorro.php';
			require_once 'Cobra.php';
			require_once 'Tartaruga.php';
			require_once 'GoldFish.php';
			require_once 'Arara.php';

			$c = new Canguru();
			$k = new Cachorro();
			$t = new Tartaruga();

			$c->locomover();
			$k->locomover();
			$t->locomover();

			?>
		</pre>
	</body>
</html>