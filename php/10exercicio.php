<?php
$v = isset($_GET["val"])?$_GET["val"]:1;
$c = $v;
$fat = 1;
do{
	$fat = $fat * $c;
	$c--;
}while ($c>=1);
echo "<h2>$v ! = $fat</h2>";
?>
<p><a href="10exercicio.html">Voltar</a></p>
