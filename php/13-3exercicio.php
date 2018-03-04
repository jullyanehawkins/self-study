<?php
function soma(){
	$p = func_get_args();//essa variável junta todos os parâmetros pra ficar mais fácil
	$t = func_num_args();//essa variável vê quantos parâmatros tem no total
	$s = 0;//a soma começa com zero
	for($i =0; $i<$t; $i++){//estrutura da repetição
		$s += $p[$i];//mesma coisa que $s=$s+$p[$i]
	}
	return $s;
}
$r = soma(3,5,2);
echo "A soma dos valores é $r";