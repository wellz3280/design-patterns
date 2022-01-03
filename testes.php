<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CaluculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new CaluculadoraDeImpostos();

// $orcamento = new Orcamento();

// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento,new Iss());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDesconto($orcamento);