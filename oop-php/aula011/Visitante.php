<?php
require_once 'Pessoa.php';
class Visitante extends Pessoa {
}

/*Não foi preciso digitar nenhum código porque Visitante herda de Pessoa
É uma herança pobre, não há nenhum atributo ou método novo
E como essa classe não é abstrata, ela pode gerar um objeto*/