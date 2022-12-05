<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'slug','author','body'
    ];
    public static function find($slug)
    {
        $books = static::all();
        // $buku = [];
        // foreach ($books as $book) {
        //     if ($book["slug"] === $slug) {
        //         $buku = $book;
        //     }
        // }
        return $books->firstWhere('slug', $slug);
    }
}