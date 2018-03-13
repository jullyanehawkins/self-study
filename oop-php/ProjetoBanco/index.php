<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<pre>
			<?php
				require_once 'ContaBanco.php';
				$p1 = new ContaBanco();//Richard
				$p2 = new ContaBanco();//Jully
				$p1->abrirConta("CC");
				$p1->setnumConta(6434);
				$p1->setdono("Richard");
				$p2->abrirConta("CP");
				$p2->setnumConta(4707);
				$p2->abrirConta("Jully");

				$p1->depositar(300);
				$p2->depositar(500);

				$p2->sacar(100);

				$p1->pagarMensal();
				$p2->pagarMensal();

				$p1->sacar(338);
				$p2->sacar(630);

				$p1->fecharConta();
				$p2->fecharConta();

				print_r($p1);
				print_r($p2);
			?>
		</pre>
	</body>
</html>