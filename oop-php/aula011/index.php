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
			//require_once 'Pessoa.php';
			//$p1 = new Pessoa(); Não pode ser criado porque Pessoa é uma classe abstrata e não gera objetos
			require_once 'Aluno.php';
			require_once 'Bolsista.php';
			/*$v1 = new Visitante();
			$v1->setNome("Richard");
			$v1->setIdade(35);
			$v1->setSexo("M");
			print_r($v1);*/
			$a1 = new Aluno();
			$a1->setNome("Richard");
			$a1->setMatricula(6434);
			$a1->setIdade(35);
			$a1->setSexo("M");
			$a1->setCurso("Engenharia Elétrica");
			$a1->pagarMensalidade();
			print_r($a1);

			$b1 = new Bolsista();
			$b1->setNome("Jully");
			$b1->setIdade(27);
			$b1->setSexo("F");
			$b1->setMatricula(4707);
			$b1->setCurso("Ciências da Computação");
			$b1->pagarMensalidade();
			$b1->setBolsa(100);
			print_r($b1);
			?>
		</pre>
	</body>
</html>