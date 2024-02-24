# Abstração em PHP

Este projeto demonstra o conceito de abstração em PHP por meio do uso de classes abstratas. Nele, criamos uma estrutura simples para representar animais e os sons que emitem.

## Funcionalidades

- **Animal.php**: Define a classe abstrata `Animal`, contendo propriedades e métodos comuns a todos os animais, como nome, idade e tipo.
- **Dog.php**: Implementa a classe `Dog`, que herda de `Animal` e representa um cachorro. Implementa o som `Au Au!`.
- **Cat.php**: Implementa a classe `Cat`, também herdando de `Animal`, representando um gato. Implementa o som `Miau!`.
- **index.php**: Arquivo principal para demonstrar o uso das classes. Cria instâncias de cachorro e gato, exibindo suas informações e sons.

## Uso

Execute o arquivo `index.php` para ver o exemplo em ação:

```bash
php index.php
```

Isso criará instâncias de cachorro e gato, exibindo suas informações e os sons que emitem.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestões de melhorias, sinta-se à vontade para abrir uma issue ou enviar um pull request.

