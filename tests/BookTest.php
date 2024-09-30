<?php

namespace Lesha9494\Exceptions\Tests;

require 'vendor/autoload.php';

use Lesha9494\Exceptions\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testGetTitle(): void
    {
        $book = new Book("Война и мир", "Лев Толстой");
        $this->assertEquals("Война и мир", $book->getTitle());
    }

    public function testGetAuthor(): void
    {
        $book = new Book("Война и мир", "Лев Толстой");
        $this->assertNotEmpty($book->getAuthor());
    }
}
