<?php

namespace Class\Models;

// Avião de Caça
class AviaoCaca extends Aviao {
    public function disparar(): string {
        return "{$this->getNome()} está disparando mísseis.\n";
    }
}
