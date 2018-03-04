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
				$v = array(	"nome"=>"Jully",
								"idade"=>27,
								"peso"=>57.8);
				foreach($v as $k => $c){
					echo "O campo $k possui o conteúdo $c <br>";
				}
				?>
			</pre>
		</div>
	</body>
</html>