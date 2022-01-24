<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('show', compact('book'));
    }
}
