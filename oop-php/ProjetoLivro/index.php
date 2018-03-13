<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1>Projeto Livro</h1>
		<pre>
			<?php
			require_once 'Pessoa.php';
			require_once 'Livro.php';

			$p[0] = new Pessoa("Jully", 27, "F");
			$p[1] = new Pessoa("Richard", 35, "M");

			$l[0] = new Livro("PHP Básico", "Gustavo Guanabara", 300, $p[0]);
			$l[1] = new Livro("OOP PHP", "Gustavo Guanabara", 500, $p[0]);
			$l[2] = new Livro("PHP Avançado", "Gustavo Guanabara", 800, $p[1]);

			$l[0]->abrir();
			$l[0]->folhear(80);
			$l[0]->avancarPag();
			$l[0]->detalhes();

			$l[1]->detalhes();

			$l[2]->detalhes();

			?>
		</pre>
	</body>
</html>