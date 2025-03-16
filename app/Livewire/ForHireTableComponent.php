<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\ForHire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ForHireTableComponent extends Component
{
    public function render()
    {
        $forHires = ForHire::where('librarian_id', Auth::id())->paginate(7);

        return view('livewire.for-hire-table-component', [
            'forHires' => $forHires
        ]);
    }
}
