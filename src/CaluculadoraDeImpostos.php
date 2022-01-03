<?php   

    namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;

class CaluculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto):float
    {
       return $imposto->calculaImposto($orcamento);
    }
}