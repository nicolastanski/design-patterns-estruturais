<?php

use Alura\DesignPattern\{GerarPedido, GerarPedidoHandler};
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

require_once('vendor/autoload.php');

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new CriarPedidoNoBanco);
$gerarPedidoHandler->attach(new LogGerarPedido);
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail);
$gerarPedidoHandler->execute($gerarPedido);