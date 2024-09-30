<?php

namespace Lesha9494\Exceptions;

use function PHPUnit\Framework\throwException;

class Library
{
    public array $books = [];
    public int $maxBooks;

    public function __construct(int $maxBooks)
    {
        $this->maxBooks = $maxBooks;
    }

    public function addBook(Book $book): void
    {
        foreach ($this->books as $existingBook) {
            if ($existingBook->getTitle() === $book->getTitle()) {
                throw new BookAlreadyExistsException("Книга с таким названием уже есть");
            }
        }

        if (count($this->books) >= $this->maxBooks) {
            throw new LibraryFullException("Количество книг превышено");
        }

        $this->books[] = $book;
    }

    public function getBooks(): array
    {
        return $this->books;
    }
}
