<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo $pedido->pedido->nomeCliente . "\n";
        echo "Enviando e-mail de pedido gerado.\n";
    }
}