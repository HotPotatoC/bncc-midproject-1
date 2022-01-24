<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('manage.index', compact('books'));
    }

    public function create()
    {
        return view('manage.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'release_year' => 'required|integer|min:2000|max:2021'
        ]);

        if ($validator->fails()) {
            return redirect()->route('manage.create')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        Book::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'pages' => $validated['pages'],
            'release_year' => $validated['release_year']
        ]);

        return redirect()->route('manage.index')
            ->with('redirect_message', [
                'type' => 'success',
                'message' => 'Book created successfully'
            ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('manage.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'release_year' => 'required|integer|min:2000|max:2021'
        ]);

        if ($validator->fails()) {
            return redirect()->route('manage.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $book = Book::findOrFail($id);
        $book->update([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'pages' => $validated['pages'],
            'release_year' => $validated['release_year']
        ]);

        return redirect()->route('manage.index')
            ->with('redirect_message', [
                'type' => 'success',
                'message' => 'Book updated successfully'
            ]);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('manage.index')
            ->with('redirect_message', [
                'type' => 'success',
                'message' => 'Book deleted successfully'
            ]);
    }
}
