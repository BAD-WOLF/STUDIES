# Calculator 1.0

Este é um programa simples de calculadora em PHP que aceita dois números e uma operação matemática e exibe o resultado.

## Funcionalidades

- O programa solicita dois números como entrada do usuário.
- O usuário pode selecionar uma operação matemática a ser realizada: adição, subtração, divisão, multiplicação ou
  cálculo do resto da divisão.
- O programa então exibe o resultado da operação escolhida.

## Uso

1. Execute o script PHP em um ambiente compatível com terminal.
2. Siga as instruções para inserir os dois números e escolher a operação desejada.
3. O resultado da operação será exibido no terminal.

## Opções de operação

As opções de operação disponíveis são:

- `+` : Adição
- `-` : Subtração
- `/` : Divisão
- `*` : Multiplicação
- `%` : Resto da divisão
- `all` : Todas as operações acima

Se a opção "all" for selecionada, o programa exibirá o resultado de todas as operações mencionadas acima.

## Cor

O programa usa códigos de escape ANSI para adicionar cor ao texto no terminal. As cores podem variar dependendo do
ambiente em que o script é executado.

## Exceção

Se uma opção inválida for selecionada, o programa lançará uma exceção com a mensagem "UNEXPECTED VALUE", que será
exibida em vermelho no terminal.

