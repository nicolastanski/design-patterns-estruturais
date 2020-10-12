<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use SplObserver;
use SplSubject;

class GerarPedidoHandler implements SplSubject
{
    /** @var SplObserver[]  */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct(/* PedidoRepositori, MailService*/)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();

    }

    public function attach(SplObserver $splObserver)
    {
        $this->acoesAposGerarPedido[] = $splObserver;
    }

    public function detach(SplObserver $observer) {}

    public function notify()
    {
        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}