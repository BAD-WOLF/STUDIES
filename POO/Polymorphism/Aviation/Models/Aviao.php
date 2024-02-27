<?php

namespace Class\Models;

// Interface para definir métodos que todos os aviões devem implementar
interface AviaoInterface {
    /**
     * @return string
     */
    public function decolar(): string;

    /**
     * @return string
     */
    public function voar(): string;

    /**
     * @return string
     */
    public function pousar() : string;
}

// Classe base para todos os tipos de aviões
abstract class Aviao implements AviaoInterface {

    /**
     * @param string $nome
     */
    public function __construct(
        private readonly string $nome
    )
    {
    }

    /**
     * @return string
     */
    public function decolar(): string {
        return "$this->nome decolando...\n";
    }

    /**
     * @return string
     */
    public function voar(): string {
        return "$this->nome voando...\n";
    }

    /**
     * @return string
     */
    public function pousar(): string {
        return "$this->nome pousando...\n";
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->getNome();
    }
}
