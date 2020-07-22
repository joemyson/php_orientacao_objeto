<?php
//modelo de classe em php

class ContaBancaria

{

//propriedade de classe exemplo $banco,$numeroAgencia

// modificadores de acesso -> public - private - protected
public $banco;
public $nomeTitular = 'joemyson';
public $numeroAgencia = '3467';
public $numeroConta;
public $saldo = 10000.00;

//craindo construto
public function _construto()
{

echo 'ola , sou construtor'




}

// criando função
public function obterSaldo()
{


return 'ola ,eu sou seu metodo obterSaldo()';



}



}

//variavel $conta e uma conta bancaria 
// uso do 'new' para criação de instancias indica que a variavel recebe o tipo
$conta = new ContaBancaria();
//$conta recebe todo os atributo da contaBancaria


//imprime o nome 
var_dump($conta -> $nomeTitular);

$conta ->saldo = 0;

echo $conta-> obterSaldo();