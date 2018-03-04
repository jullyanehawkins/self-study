<?php
$a = isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y") - $a;
echo "Você nasceu em $a e terá $i anos<br>";

if($i < 16) {
	$tipoVoto = "não pode votar";
}
elseif(($i >=16 && $i < 18) || ($i>65)){
		$tipoVoto = "o voto é opcional";
	}
	else{
		$tipoVoto = "o voto é obrigatório";
	}
echo "Para essa idade, $tipoVoto";
?>
<br><a href="04exercicio.html">Voltar</a>
