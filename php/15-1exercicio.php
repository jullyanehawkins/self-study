<?php
include "15exercicio.php";
/*A função include é parecida com a função require.
A diferença é que caso o include não consiga incluir o arquivo chamado, ele vai continuar o procedimento.
Já o require, ele pára depois de não encontrar o arquivo
Também tem os:
include_once/require_once: basicamente se já carregou o arquivo, não precisa carregar de novo
 */
echo "<h1>Testando novas funções</h1>";
hello();
mostraValor(4);
echo "<h2>Finalizando o programa...</h2>";