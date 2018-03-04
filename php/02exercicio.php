<?php
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
$ano = isset($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
$idade = date("Y") - $ano;
echo "$nome é $sexo e tem $idade anos";
?>
<br><a href="02exercicio.html">Voltar</a>
