<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class LogGerarPedido implements SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Gerando log de geração de pedido" . PHP_EOL;
    }
}
