<?php

namespace Lesha9494\Exceptions\Tests;

require 'vendor/autoload.php';

use Lesha9494\Exceptions\Library;
use Lesha9494\Exceptions\Book;
use PhpUnit\Framework\TestCase;
use Lesha9494\Exceptions\BookAlreadyExistsException;
use Lesha9494\Exceptions\LibraryFullException;

class LibraryTest extends TestCase
{
    public function testAddDublicateBook()
    {
        $this->expectException(BookAlreadyExistsException::class);

        $library = new Library(2);
        $book = new Book("Война и мир", "Лев Толстой");
        $library->addBook($book);
        $library->addBook($book);
    }

    public function testAddFullLibrary()
    {
        $this->expectException(LibraryFullException::class);
        $library = new Library(1);
        $book1 = new Book("Война и мир", "Лев Толстой");
        $book2 = new Book("Мёртвые души", "Николай Гоголь");

        $library->addBook($book1);
        $library->addBook($book2);
    }
}
