<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curso = new Curso();
        $curso->name = "laravel";
        $curso->description = "framework de php";
        $curso->categoria  = "desarrollo web";
        $curso->save();
        
    }
}
