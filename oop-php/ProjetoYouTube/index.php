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
			require_once 'Video.php';
			require_once 'Gafanhoto.php';
			require_once 'Visualizacao.php';

			$v[0] = new Video("Curso de Algoristmos");
			$v[1] = new Video("Curso de PHP");
			$v[2] = new Video("Curso de MySQL");
			$v[3] = new Video("Curso de OOP em PHP");

			$g[0] = new Gafanhoto("Jully", 27, "F", "jullyanejgf");

			$vi[0] = new Visualizacao($g[0], $v[3]);//Ligação que agrega as classes Gafanhoto e Video
			$vi[1] = new Visualizacao($g[0], $v[0]);

			$vi[0]->avaliar();
			$vi[1]->avaliarPorc(85);

			//print_r($v);
			//print_r($g);
			print_r($vi);
			?>
		</pre>
	</body>
</html>