<?php
/*Passagem por referência
O parâmetro recebe a referência da variável
e se escrevermos a variável fora da função,
o valor mudará
Ex/: x = 5 (porque 3 + 2) e a = 5 (porque recebeu a referência)
Ou seja, quando se muda o parâmetro, a variável também mudará
*/
function teste (&$x){
	$x = $x + 2;//pode ser $x += 2
	echo "<p>O valor de X é $x</p>";
}
$a = 3;
teste($a);
echo "<p>O valor de A é $a</p>";