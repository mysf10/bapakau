<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'book' => Book::all()
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
