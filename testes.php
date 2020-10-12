<?php

require_once("./vendor/autoload.php");

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->quantidadeItens = 5;

echo $calculadora->calcula($orcamento, new Icms());

// $calculadora = new CalculadoraDeDescontos();

// $orcamento = new Orcamento();
// $orcamento->valor = 600;
// $orcamento->quantidadeItens = 3;

// echo $calculadora->calculaDescontos($orcamento);