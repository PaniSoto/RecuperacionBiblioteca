<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForHireRequest;
use App\Mail\ForhireCreatedMail;
use App\Mail\ForHireDeletedMail;
use App\Mail\ForhireEditedMail;
use App\Mail\PostCreatedMail;
use App\Models\Book;
use App\Models\ForHire;
use App\Models\Librarian;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ForHireController extends Controller
{
    public function create()
    {
        $books = Book::all();
        $readers = Reader::all();
        $librarians = Librarian::all();
        return view('forHires.create')->with(compact('books', 'readers', 'librarians'));
    }

    public function store(StoreForHireRequest $request)
    {
        $request->merge(['user_id' => Auth::user()->id]);

        ForHire::create($request->all());

        Mail::to('prueba@prueba.com')->send(new ForhireCreatedMail($request));

        return redirect()->route('dashboard');
    }

    public function destroy(ForHire $forHire)
    {
        $forHire->delete();

        Mail::to('prueba@prueba.com')->send(new ForHireDeletedMail($forHire));

        return redirect('dashboard');
    }

    public function edit(ForHire $forHire)
    {
        $books = Book::all();
        $readers = Reader::all();
        $librarians = Librarian::all();
        return view('forHires.edit')->with(compact('forHire', 'books', 'readers', 'librarians'));
    }

    public function update(StoreForHireRequest $request, ForHire $forHire)
    {
        $forHire->update($request->all());

        Mail::to('prueba@prueba.com')->send(new ForhireEditedMail($forHire));

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