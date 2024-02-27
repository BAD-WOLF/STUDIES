<?php

namespace Class\Models;

class ManipuladorAviao {
    // Structural Polymorphism
    public function verificarSeguranca(Aviao $aviao): string {
        if ($aviao instanceof AviaoComercial) {
            return "Realizando verificação de segurança para {$aviao->getNome()}...\n";
        } elseif ($aviao instanceof AviaoCarga) {
            return "Realizando inspeção de carga para {$aviao->getNome()}...\n";
        } elseif ($aviao instanceof AviaoCaca) {
            return "Verificando armamento para {$aviao->getNome()}...\n";
        } else {
            return "Não foi possível verificar a segurança do avião.\n";
        }
    }
}
