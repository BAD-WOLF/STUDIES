<?php

require_once __DIR__ . "/LibraryMaterial.php";

// Class representing a book in the library
class Book extends LibraryMaterial
{

    /**
     * @param int $id
     * @param string $title
     * @param string $author
     * @param int $numPages
     */
    public function __construct(
        int $id,
        string $title,
        private string $author,
        private int $numPages
    )
    {
        parent::__construct($id, $title);
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getNumPages(): int
    {
        return $this->numPages;
    }
}
