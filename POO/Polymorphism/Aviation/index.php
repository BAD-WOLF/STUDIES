<?php

use Class\Models\{
    Aeroporto,
    AviaoCaca,
    AviaoCarga,
    AviaoComercial,
    DadosAviao,
    ListaAvioes,
    ManipuladorAviao
};

require_once __DIR__ . '/vendor/autoload.php';

// Criação de instâncias de aviões
$aviaoComercial = new AviaoComercial('Boeing 737');
$aviaoCarga = new AviaoCarga('Boeing 747');
$aviaoCaca = new AviaoCaca('F-16');

// Criação de instância de Aeroporto
$aeroporto = new Aeroporto();

// Demonstração de métodos polimórficos
echo $aeroporto->autorizarDecolagem($aviaoComercial);
echo $aeroporto->autorizarPouso($aviaoComercial);

echo $aeroporto->autorizarDecolagem($aviaoCarga);
echo $aeroporto->autorizarPouso($aviaoCarga);

echo $aeroporto->autorizarDecolagem($aviaoCaca);
echo $aeroporto->autorizarPouso($aviaoCaca);

echo $aeroporto->servicoEspecial($aviaoComercial);
echo $aeroporto->servicoEspecial($aviaoCarga);
echo $aeroporto->servicoEspecial($aviaoCaca);

// Demonstração de polimorfismo em uma lista de aviões
$listaAvioes = new ListaAvioes();
$listaAvioes->adicionarAviao($aviaoComercial);
$listaAvioes->adicionarAviao($aviaoCarga);
$listaAvioes->adicionarAviao($aviaoCaca);
$listaAvioes->listarAvioes();

// Demonstração de polimorfismo estrutural
$manipuladorAviao = new ManipuladorAviao();
echo $manipuladorAviao->verificarSeguranca($aviaoComercial);
echo $manipuladorAviao->verificarSeguranca($aviaoCarga);
echo $manipuladorAviao->verificarSeguranca($aviaoCaca);

// Demonstração de polimorfismo de linha
$dadosAviao = new DadosAviao();
$dadosAviao->exibirDados([
    'nome' => 'Boeing 737',
    'modelo' => 'Comercial',
    'passageiros' => 150
]);
$dadosAviao->exibirDados([
    'nome' => 'Boeing 747',
    'modelo' => 'Carga',
    'carga' => 5000
]);
$dadosAviao->exibirDados([
    'nome' => 'F-16',
    'modelo' => 'Caça',
    'armamento' => 'Mísseis ar-ar'
]);
