<?php


declare(strict_types=1);

class Music {
    public string $name;
    public string $genre;
    public int $listen;
    public array $data = [];

    public function __construct(string $name, string $genre, int $listen) {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
        $this->data = ['name' => $name, 'genre' => $genre, 'listen' => $listen];
    }

    public function getName(): string {
        return $this->name;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getListen(): int {
        return $this->listen;
    }

    public function arrayToString(): string {
        return implode(', ', $this->data);
    }
}
?>
