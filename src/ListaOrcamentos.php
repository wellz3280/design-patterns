<?php
   
   namespace Alura\DesignPattern;

class ListaOrcamentos
{
    /** @var orcamento[] */

    private array $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] =  $orcamento;
    }

    public function orcamentos():array
    {
        return $this->orcamentos;
    }
}