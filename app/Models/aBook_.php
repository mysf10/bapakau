<?php

namespace App\Models;

class Book
{
    private static $book_info = [
        [
            "title" => "The Beast And The Shrek",
            "slug" => "the-beast-and-the-shrek",
            "author" => "Andre",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, dolores odio rem assumenda laudantium quibusdam amet debitis, neque molestiae eligendi excepturi a aliquid, quisquam cum eos. Doloremque ratione porro officia."
        ],
        [
            "title" => "The Beauty And The Handsome",
            "slug" => "the-beauty-and-the-handsome",
            "author" => "Nico",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, dolores odio rem assumenda laudantium quibusdam amet debitis, neque molestiae eligendi excepturi a aliquid, quisquam cum eos. Doloremque ratione porro officia."
        ],
        [
            "title" => "One Piece:Second Season",
            "slug" => "one-piece:second-season",
            "author" => "Ferdinandrey",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, dolores odio rem assumenda laudantium quibusdam amet debitis, neque molestiae eligendi excepturi a aliquid, quisquam cum eos. Doloremque ratione porro officia."
        ],
        [
            "title" => "Naruto:Boruto Never Exist",
            "slug" => "naruto:boruto-never-exist",
            "author" => "hanantha",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, dolores odio rem assumenda laudantium quibusdam amet debitis, neque molestiae eligendi excepturi a aliquid, quisquam cum eos. Doloremque ratione porro officia."
        ]
    ];

    public static function allBook()
    {
        return collect(self::$book_info);
    }

    public static function find($slug)
    {
        $books = static::allBook();
        // $buku = [];
        // foreach ($books as $book) {
        //     if ($book["slug"] === $slug) {
        //         $buku = $book;
        //     }
        // }
        return $books->firstWhere('slug', $slug);
    }
}
