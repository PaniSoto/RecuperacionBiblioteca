<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReaderRequest;
use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('dashboard');
    }

    public function destroy(Reader $reader)
    {
        $reader->delete();

        // Mail::to('prueba@prueba.com')->send(new ForHireDeletedMail($reader));

        return redirect('dashboard');
    }

    public function edit(Reader $reader)
    {
        return view('readers.edit')->with(compact('reader'));
    }

    public function update(StoreReaderRequest $request, Reader $reader)
    {
        $reader->update($request->all());

        return redirect()->route('dashboard');
    }

    public function show(Reader $reader)
    {
        return view('readers.show')->with(compact('reader'));
    }
}