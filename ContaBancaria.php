<?php
//modelo de classe em php

class ContaBancaria

{

//propriedade de classe

// modificadores de acesso -> public - private - protected
public $banco;
public $nomeTitular = 'joemyson';
public $numeroAgencia;
public $numeroConta;
public $saldo;






}

//variavel $conta e uma conta bancaria 

$conta = new ContaBancaria();

var_dump($conta -> $nomeTitular);