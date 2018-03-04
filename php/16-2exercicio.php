<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
	</head>
	<body>
		<div>
			<pre>
				<?php
				//arrays dentro da tag <pre> faz o resultado aparecer na vertical na hora de ver no browser
				$c = range(5,20,2);//range sintax cria um vetor que a 1a posição é 5 e a última é 20, contando de 2 em 2
				print_r($c);
				?>
			</pre>
		</div>
	</body>
</html>