<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private float $valorOrcamento;
    
    private int $numeroItens;

    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }

    public function setValorOrcamento(float $valorOrcamento)
    {
        $this->valorOrcamento = $valorOrcamento;
    }

    public function getNumeroItens()
    {
        return $this->numeroItens;
    }

    public function setNumeroItens(float $numeroItens)
    {
        $this->numeroItens = $numeroItens;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente(string $nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }
}