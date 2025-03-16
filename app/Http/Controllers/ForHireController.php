<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Book;
use App\Models\ForHire;
use App\Models\Librarian;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForHireController extends Controller
{

    public function create()
    {
        $books = Book::all();
        $readers = Reader::all();
        $librarians = Librarian::all();
        return view('forHires.create')->with(compact('books', 'readers', 'librarians'));
    }

    public function store(StorePostRequest $request)
    {
        $request->merge(['user_id' => Auth::user()->id]);


        ForHire::create($request->all());


        return redirect()->route('dashboard');
    }

    public function destroy(ForHire $forHire)
    {
        // $post = Post::find($post);
        $forHire->delete();

        return redirect('dashboard');
    }

    public function edit(ForHire $forHire)
    {
        $books = Book::all();
        $readers = Reader::all();
        $librarians = Librarian::all();
        return view('forHires.edit')->with(compact('forHire', 'books', 'readers', 'librarians'));
    }

    public function update(StorePostRequest $request, ForHire $forHire)
    {
        $forHire->update($request->all());

        return redirect()->route('dashboard');
    }

    public function show(ForHire $forHire)
    {
        $books = Book::all();
        $readers = Reader::all();
        $librarians = Librarian::all();
        return view('forHires.show')->with(compact('forHire', 'books', 'readers', 'librarians'));
    }
}