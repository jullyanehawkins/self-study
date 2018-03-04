<?php
function soma ($a, $b){
	$s = $a + $b;//pode remover essa linha e escrever na próxima:
	return $s;//return $a+$b
}
$x = -4;
$y = 8;
$r = soma($x, $y);
echo "A soma entre $x e $y é igual a $r";

/*Rotina 2: Funções
Função com retorno e fora do corpo o valor é colocado em uma variável
*/