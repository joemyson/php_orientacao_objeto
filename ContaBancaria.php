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
public function _construto($banco.$nomeTitular,$numeroAgencia,$numeroConta,$saldo)
{

// acessar o atributo dentro da classe uso do 'this'

$this ->banco =$banco;
$this ->nomeTitula =$nomeTitular;
$this ->numeroAgencia =$numeroAgencia;
$this ->numeroConta =$numeroConta;
$this ->saldo =$saldo;






}

// criando função
public function obterSaldo()
{


return 'ola ,eu sou seu metodo obterSaldo()';



}



}

//variavel $conta e uma conta bancaria 
// uso do 'new' para criação de instancias indica que a variavel recebe o tipo
$conta = new ContaBancaria(


    //valores a atribuir em conta bancaria
'Banco do Brasil',
'joe ',
'8244',
'55555',
'3000.00'
);
//$conta recebe todo os atributo da contaBancaria


//imprime o nome 
var_dump($conta -> $nomeTitular);

$conta ->saldo = 0;

echo $conta-> obterSaldo();