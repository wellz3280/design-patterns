<?php  
    namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostosCom2Aliquotas
{
    
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento):bool
    {
        return $orcamento->valor > 500;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento):float
    {
        // aliquota maxima 3%
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento):float
    {
           // aliquota minima 2%
            return $orcamento->valor * 0.02;
    }
}