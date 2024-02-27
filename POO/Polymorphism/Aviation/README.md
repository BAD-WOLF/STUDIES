# Demonstração de Conhecimento em PHP - Polimorfismo com Aviões

Este projeto é uma demonstração do meu conhecimento em PHP, especificamente sobre o conceito de polimorfismo aplicado ao
contexto de aviões.

## Sobre o Projeto

O projeto consiste em uma implementação em PHP que ilustra diferentes tipos de polimorfismo, como Subtyping, Ad-hoc
Polymorphism (Overloading), Ad-hoc Polymorphism (Coercion Polymorphism), Parametric Polymorphism, Structural
Polymorphism e Row Polymorphism.

O tema escolhido foi aviões, refletindo minha paixão por esse assunto, embora não tenha nada de impactante para o lado
da aviação. A escolha do tema foi feita levando em consideração meu interesse pessoal, o que tornou o processo de
desenvolvimento mais envolvente.

## Dificuldades

É importante ressaltar que eu não estava mentalmente preparado para escrever o código em inglês, o que tornou o processo
desafiador. Lidar com algo complexo como este, cheio de lógicas, e ainda ter que usar inglês, exigiu não apenas pensar
na lógica, mas também raciocinar em inglês para escrever todo o código no idioma, como é feito em outras demonstrações
que tenho neste mesmo repositório do GitHub.

## Estrutura do Projeto

O projeto está organizado da seguinte forma:

- `Models/`: Contém as classes PHP relacionadas ao tema dos aviões e ao conceito de polimorfismo.
    - `Aviao.php`: Define a interface e a classe base para os aviões.
    - `AviaoComercial.php`: Implementa a classe para aviões comerciais.
    - `AviaoCarga.php`: Implementa a classe para aviões de carga.
    - `AviaoCaca.php`: Implementa a classe para aviões de caça.
    - `Aeroporto.php`: Implementa métodos relacionados à operação de aviões em um aeroporto.
    - `ListaAvioes.php`: Define uma classe para gerenciar uma lista de aviões.
    - `ManipuladorAviao.php`: Implementa métodos para manipular aviões, como verificação de segurança.
    - `DadosAviao.php`: Implementa métodos para exibir dados específicos de cada tipo de avião.
- `index.php`: Arquivo principal que demonstra o uso das classes e funções definidas.

## Executando o Projeto

Para executar o projeto, basta clonar este repositório. Certifique-se
de que o PHP esteja instalado em seu ambiente.

#### Exemplo de comando para executar com o PHP CLI:
```shell
php index.php
```

## Observação

Este projeto foi desenvolvido como parte de uma demonstração de conhecimento e não tem a intenção de ser uma aplicação
completa. A ênfase está na aplicação dos conceitos de polimorfismo em um contexto específico.

