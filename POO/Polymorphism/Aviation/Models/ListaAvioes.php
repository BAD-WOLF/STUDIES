<?php

namespace Class\Models;

class ListaAvioes {
    /**
     * @var array
     */
    private array $avioes = [];

    // Parametric Polymorphism

    /**
     * @param Aviao $aviao
     * @return void
     */
    public function adicionarAviao(Aviao $aviao): void {
        $this->avioes[] = $aviao;
    }

    /**
     * @return void
     */
    public function listarAvioes(): void {
        foreach ($this->avioes as $aviao) {
            echo "{$aviao->getNome()}\n";
        }
    }
}
