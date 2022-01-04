<?php   

    require 'vendor/autoload.php';

    use Alura\DesignPattern\Orcamento;


    $orcamento1 = new Orcamento();
    $orcamento1->quantidadeItens = 7;
    $orcamento1->aprova();
    $orcamento1->valor =  1500;

    $orcamento2 = new Orcamento();
    $orcamento2->quantidadeItens = 3;
    $orcamento2->reprova();
    $orcamento2->valor =  150;

    $orcamento3 = new Orcamento();
    $orcamento3->quantidadeItens = 5;
    $orcamento3->aprova();
    $orcamento3->finaliza();
    $orcamento3->valor =  1350;

    $listaOrcamento = [ $orcamento1,$orcamento2,$orcamento3];

    foreach($listaOrcamento as $orcamento){
        echo "valor". $orcamento->valor. PHP_EOL;
        echo "Estado" .  get_class($orcamento->estadoAtual).PHP_EOL;
        echo "QTD. Itens: ". $orcamento->quantidadeItens.PHP_EOL;
        
        echo PHP_EOL;
    }