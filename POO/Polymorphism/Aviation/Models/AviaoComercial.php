<?php

namespace Class\Models;

class AviaoComercial extends Aviao
{
    /**
     * @return string
     */
    public function servirComida(): string {
        return "{$this->getNome()} está servindo comida aos passageiros.\n";
    }
}