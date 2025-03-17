<?php

namespace App\Livewire;

use App\Models\Reader;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReaderTableComponent extends Component
{
    public function render()
{
    // $readers = Reader::paginate(3);

    return view('livewire.reader-table-component', [
        'readers' => Reader::paginate(7),
    ]);
}
}