<?php

namespace Database\Seeders;

use App\Models\Librarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $librarian = new Librarian();
        $librarian->name = 'Manuel';
        $librarian->address = 'Calle 123';
        $librarian->email = 'libro@gmail.com';
        $librarian->password = bcrypt('1234');
        $librarian->save();

        Librarian::factory(9)->create();
    }
}
