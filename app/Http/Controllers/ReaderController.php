<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReaderRequest;
use App\Mail\ReaderCreatedMail;
use App\Mail\ReaderDeletedMail;
use App\Mail\ReaderEditedMail;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReaderController extends Controller
{
    public function create()
    {
        return view('readers.create');
    }

    public function store(StoreReaderRequest $request)
    {
        $request->merge(['user_id' => Auth::user()->id]);

        Reader::create($request->all());

        Mail::to('prueba@prueba.com')->send(new ReaderCreatedMail($request));

        return redirect()->route('dashboard');
    }

    public function destroy(Reader $reader)
    {
        $reader->delete();

        Mail::to('prueba@prueba.com')->send(new ReaderDeletedMail($reader));

        return redirect('dashboard');
    }

    public function edit(Reader $reader)
    {
        return view('readers.edit')->with(compact('reader'));
    }

    public function update(StoreReaderRequest $request, Reader $reader)
    {
        $reader->update($request->all());

        Mail::to('prueba@prueba.com')->send(new ReaderEditedMail($reader));

        return redirect()->route('dashboard');
    }

    public function show(Reader $reader)
    {
        return view('readers.show')->with(compact('reader'));
    }
}