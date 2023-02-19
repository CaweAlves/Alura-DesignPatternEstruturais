<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportadoInterface
{

    public function __construct(private Orcamento $orcamento)
    {
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->quantidadeDeItems,
        ];
    }
}
