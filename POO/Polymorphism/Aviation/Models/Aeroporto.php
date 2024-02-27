<?php

namespace Class\Models;

class Aeroporto {
    /**
     * @param Aviao $aviao
     * @return string
     */
    public function autorizarDecolagem(Aviao $aviao): string {
        return $aviao->decolar();
    }

    /**
     * @param Aviao $aviao
     * @return string
     */
    public function autorizarPouso(Aviao $aviao): string {
        return $aviao->pousar();
    }

    // Ad-hoc Polymorphism (Coercion Polymorphism)

    /**
     * @param $aviao
     * @return string
     */
    public function servicoEspecial($aviao): string {
        if ($aviao instanceof AviaoComercial) {
            return $aviao->servirComida();
        } elseif ($aviao instanceof AviaoCarga) {
            return $aviao->carregarMercadorias();
        } elseif ($aviao instanceof AviaoCaca) {
            return $aviao->disparar();
        } else {
            return "Serviço especial não disponível para este tipo de avião.\n";
        }
    }
}
