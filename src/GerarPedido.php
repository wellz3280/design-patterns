<?php  

    namespace Alura\DesignPattern;

class GerarPedido implements Command
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento , int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute():void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria Pedido no banco de dados". PHP_EOL;
        echo "Envia e-mail para Cliente.". PHP_EOL;
    }
}