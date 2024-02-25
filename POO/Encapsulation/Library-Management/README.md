# Sistema de Gerenciamento de Materiais da Biblioteca

Este código em PHP fornece uma demonstração de um sistema de gerenciamento de materiais de biblioteca. Ele inclui classes para representar diferentes tipos de materiais disponíveis em uma biblioteca, como livros e e-books. O código demonstra forte encapsulamento e princípios orientados a objetos, com nomes de classes e comentários em inglês, enquanto utiliza strings em português para clareza.

## Classes

### LibraryMaterial

- Representa uma classe base para todos os materiais na biblioteca.
- Propriedades:
    - `$id` (int): Identificador único para o material.
    - `$title` (string): Título do material.
    - `$available` (bool): Indica se o material está disponível para empréstimo.
- Métodos:
    - `__construct(int $id, string $title)`: Método construtor para inicializar o material.
    - `getId(): int`: Retorna o ID do material.
    - `getTitle(): string`: Retorna o título do material.
    - `isAvailable(): bool`: Verifica se o material está disponível.
    - `borrow(): void`: Marca o material como emprestado.
    - `returnMaterial(): void`: Marca o material como devolvido.

### Book

- Representa uma classe para livros disponíveis na biblioteca.
- Estende: `LibraryMaterial`
- Propriedades adicionais:
    - `$author` (string): Autor do livro.
    - `$numPages` (int): Número de páginas do livro.
- Métodos adicionais:
    - `__construct(int $id, string $title, string $author, int $numPages)`: Método construtor para inicializar o livro.
    - `getAuthor(): string`: Retorna o autor do livro.
    - `getNumPages(): int`: Retorna o número de páginas do livro.

### Ebook

- Representa uma classe para e-books disponíveis na biblioteca.
- Estende: `LibraryMaterial`
- Propriedades adicionais:
    - `$format` (string): Formato do e-book.
    - `$sizeMB` (float): Tamanho do e-book em MB.
- Métodos adicionais:
    - `__construct(int $id, string $title, string $format, float $sizeMB)`: Método construtor para inicializar o e-book.
    - `getFormat(): string`: Retorna o formato do e-book.
    - `getSizeMB(): float`: Retorna o tamanho do e-book em MB.

## Uso

- Instancie objetos das classes `Book` e `Ebook` para representar materiais da biblioteca.
- Utilize métodos como `borrow()` e `returnMaterial()` para gerenciar a disponibilidade dos materiais.
- Recupere informações sobre os materiais usando métodos de acesso como `getTitle()`, `getAuthor()`, `getFormat()`, etc.
- Execute o arquivo `index.php` para ver o exemplo em ação:

```bash
php index.php
```

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestões de melhorias, sinta-se à vontade para abrir uma issue ou enviar um pull request.
