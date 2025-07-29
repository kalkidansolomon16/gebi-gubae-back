<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section = [
            ['name'=>'Bach and programs'],
            ['name'=>'Hymns and Arts'],
            ['name'=>'Bach and programs'],
            ['name'=>'Membership Affairs and Information'],
            ['name'=>'Teaching and Apostolic Ministry'],
            ['name'=>'Vocational, Language, and Special Needs'],

        ];
        Section::insert($section);
    }
}
