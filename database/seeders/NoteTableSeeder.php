<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Note::factory()->count(50000)->create();
    }
}
