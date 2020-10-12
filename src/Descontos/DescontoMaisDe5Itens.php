<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 5) {
            return $orcamento->valor * 0.1;
        }

       return $this->proximoDesconto->calculaDesconto($orcamento);
    }

}