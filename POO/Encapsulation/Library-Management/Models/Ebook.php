<?php

require_once __DIR__ . "/LibraryMaterial.php";

// Class representing an e-book in the library
class Ebook extends LibraryMaterial {

    /**
     * @param int $id
     * @param string $title
     * @param string $format
     * @param float $sizeMB
     */
    public function __construct(int $id, string $title, private string $format, private float $sizeMB) {
        parent::__construct($id, $title);
    }

    /**
     * @return string
     */
    public function getFormat(): string {
        return $this->format;
    }

    /**
     * @return float
     */
    public function getSizeMB(): float {
        return $this->sizeMB;
    }
}
