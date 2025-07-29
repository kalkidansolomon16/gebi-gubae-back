<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = [
            ['name'=>'2018'],
            ['name'=>'2019'],
            ['name'=>'2020'],
        ];
        Batch::insert($batch);
    }
}
