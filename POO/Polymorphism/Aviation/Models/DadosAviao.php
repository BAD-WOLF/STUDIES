<?php

namespace Class\Models;

class DadosAviao {
    // Row Polymorphism
    /**
     * @param array $aviao
     * @return void
     */
    public function exibirDados(array $aviao): void {
        echo "Nome: {$aviao['nome']}\n";
        echo "Modelo: {$aviao['modelo']}\n";

        // Verificar se é um avião comercial
        if (isset($aviao['passageiros'])) {
            echo "Passageiros: {$aviao['passageiros']}\n";
        }

        // Verificar se é um avião de carga
        if (isset($aviao['carga'])) {
            echo "Carga: {$aviao['carga']} kg\n";
        }

        // Verificar se é um avião de caça
        if (isset($aviao['armamento'])) {
            echo "Armamento: {$aviao['armamento']}\n";
        }
    }
}
