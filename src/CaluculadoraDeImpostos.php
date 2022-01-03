<?php   

    namespace Alura\DesignPattern;
/**
 * Desing Pattern strategy. 
 * 
 * A existência de diversos algoritmos para uma ação,
 *  resultando na possibilidade de vários ifs.
 * 
  */
use Alura\DesignPattern\Impostos\Imposto;

class CaluculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto):float
    {
       return $imposto->calculaImposto($orcamento);
    }
}