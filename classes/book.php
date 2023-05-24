<?php

class Book
{

    private string $name;
    private int $year;
    private int $author_id;

    public function __construct($name, $year, $author_id)
    {
        $this->name = $name;
        $this->year = $year;
        $this->author_id = $author_id;
    }

    public function getTitle(): string
    {
        return $this->name;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getAuthorId(): int
    {
        return $this->author_id;
    }
}