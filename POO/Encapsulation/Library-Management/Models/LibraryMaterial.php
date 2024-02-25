<?php

// Base class representing a library material
class LibraryMaterial
{

    /**
     * @param int $id
     * @param string $title
     * @param bool $available
     */
    public function __construct(
        protected int    $id,
        protected string $title,
        protected bool   $available = true
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @return void
     */
    public function borrow(): void
    {
        $this->available = false;
    }

    /**
     * @return void
     */
    public function returnMaterial(): void
    {
        $this->available = true;
    }
}
