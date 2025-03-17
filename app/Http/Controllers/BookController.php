<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        $request->merge(['user_id' => Auth::user()->id]);

        Book::create($request->all());

        return redirect()->route('dashboard');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('dashboard');
    }

    public function edit(Book $book)
    {
        return view('books.edit')->with(compact('book'));
    }

    public function update(StoreBookRequest $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->route('dashboard');
    }

    public function show(Book $book)
    {
        return view('books.show')->with(compact('book'));
    }
}
