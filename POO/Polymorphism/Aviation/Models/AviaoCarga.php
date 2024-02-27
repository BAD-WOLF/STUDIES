<?php

namespace Class\Models;

// Avião de Carga
class AviaoCarga extends Aviao {

    /**
     * @return string
     */
    public function carregarMercadorias(): string {
        return "{$this->getNome()} está carregando mercadorias.\n";
    }
}
