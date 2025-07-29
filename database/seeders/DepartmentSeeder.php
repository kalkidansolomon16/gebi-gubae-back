<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departement = [
            ['name'=>'Computer Science'],
            ['name'=>'Information Systems'],
            ['name'=>'Information Technology'],
            ['name'=>'Software Engineering'],
            ['name'=>'Computer Science'],
            ['name'=>'Fashion Design'],
            ['name'=>'Garment Engineering'],
            ['name'=>'Textile Engineering'],
            ['name'=>'Leather Engineering'],
            ['name'=>'Mechanical Engineering'],
            ['name'=>'Chemical Engineering'],
            ['name'=>'Mechatronics Engineering'],
            ['name'=>'Industrial Engineering'],
            ['name'=>'Architecture '],
            ['name'=>'Water Resource & Irrigation Engineering '],
            ['name'=>'Hydraulic and Water Resource Engineering'],
            ['name'=>'Civil Engineering'],
            ['name'=>'Construction Technology and Management'],
            ['name'=>'Electrical and Computer Engineering'],
            ['name'=>'Biomedical Engineering '],
         
        ];
        Department::insert($departement);
    }
}
