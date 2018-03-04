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
				$v = array(	3=>5,
								1=>9,
								0=>8,
								7=>7);
				unset($v[0]);//tirou o índice zero
				print_r($v);
				?>
			</pre>
		</div>
	</body>
</html>