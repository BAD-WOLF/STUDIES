<?php

require_once __DIR__ . "/Models/Book.php";
require_once __DIR__ . "/Models/Ebook.php";

// Create instances of Book and Ebook
$book1 = new Book(1, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 1000);
$book2 = new Book(2, 'Harry Potter', 'J.K. Rowling', 800);
$ebook1 = new Ebook(3, 'Algoritmos em PHP', 'PDF', 2.5);
$ebook2 = new Ebook(4, 'Design Patterns', 'EPUB', 3.2);

// Display available materials
echo "Materiais disponíveis na biblioteca:\n";
echo "- Livros:\n";
echo '  1. ' . $book1->getTitle() . ' (Disponível: ' . ($book1->isAvailable() ? 'Sim' : 'Não') . ")\n";
echo '  2. ' . $book2->getTitle() . ' (Disponível: ' . ($book2->isAvailable() ? 'Sim' : 'Não') . ")\n";
echo "- E-books:\n";
echo '  3. ' . $ebook1->getTitle() . ' (Disponível: ' . ($ebook1->isAvailable() ? 'Sim' : 'Não') . ")\n";
echo '  4. ' . $ebook2->getTitle() . ' (Disponível: ' . ($ebook2->isAvailable() ? 'Sim' : 'Não') . ")\n";

// Borrow a book
$book1->borrow();
echo "\nLivro \"" . $book1->getTitle() . "\" emprestado. Disponível: " . ($book1->isAvailable() ? 'Sim' : 'Não') . "\n";

// Borrow an ebook
$ebook1->borrow();
echo "E-book \"" . $ebook1->getTitle() . "\" disponível para download. Tamanho: " . $ebook1->getSizeMB() . "MB\n";

// Return the borrowed book
$book1->returnMaterial();
echo "\nLivro \"" . $book1->getTitle() . "\" devolvido. Disponível: " . ($book1->isAvailable() ? 'Sim' : 'Não') . "\n";

// Display detailed information about each material
echo "\nDetalhes dos materiais:\n";
echo "Livro \"" . $book1->getTitle() . "\":\n";
echo '  Autor: ' . $book1->getAuthor() . "\n";
echo '  Número de páginas: ' . $book1->getNumPages() . "\n";
echo "E-book \"" . $ebook1->getTitle() . "\":\n";
echo '  Formato: ' . $ebook1->getFormat() . "\n";
echo '  Tamanho: ' . $ebook1->getSizeMB() . "MB\n";

