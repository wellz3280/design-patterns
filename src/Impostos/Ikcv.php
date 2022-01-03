<?php
    namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostosCom2Aliquotas
{
   

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento):bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento):float
    {
        // aliquota maxima 4%
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento):float
    {
           // aliquota minima 2.5%
            return $orcamento->valor * 0.025;
    }
}