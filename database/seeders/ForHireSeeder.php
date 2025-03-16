<?php

namespace Database\Seeders;

use App\Models\ForHire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForHireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $for_hire = new ForHire();
        $for_hire->forHire_date = '2021-10-10';
        $for_hire->return_date = '2021-10-20';
        $for_hire->status = 'Pendiente';
        $for_hire->book_id = 1;
        $for_hire->librarian_id = 1;
        $for_hire->reader_id = 1;
        $for_hire->save();

        ForHire::factory(9)->create();
    }
}
