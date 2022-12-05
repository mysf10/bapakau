<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'book' => Buku::allBook()
        ]);
    }

    public function show($slug)
    {
        return view('books', [
            "title" => $slug,
            "book" => Book::find($slug)
        ]);
    }
}
