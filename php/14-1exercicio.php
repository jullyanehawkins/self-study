<?php
/*Passagem por valor
Apenas o valor da variável é passado
e por isso quando escrevemos a variável fora
da função, o valor continua o inicial
Ex.: x = 5 (porque 3 + 2) e a = 3 (quando chamado fora da função)
Ou seja, qualquer mudança no parâmetro, não altera a variável
 */
function teste ($x){
	$x = $x + 2;//pode ser $x += 2
	echo "<p>O valor de X é $x</p>";
}
$a = 3;
teste($a);
echo "<p>O valor de A é $a</p>";