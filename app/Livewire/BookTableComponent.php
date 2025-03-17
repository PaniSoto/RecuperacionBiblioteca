<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookTableComponent extends Component
{
    public function render()
    {
        return view('livewire.book-table-component', [
            'books' => Book::paginate(7),
        ]);
    }
}
