<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catJS = new Type();
        $catJS->name = "Frontend";
        $catJS->icon = "fa-brands fa-firefox";
        $catJS->save();
        
        $catVue = new Type();
        $catVue->name = "Backend";
        $catVue->icon = "fa-solid fa-server";
        $catVue->save();
        
        $catPHP = new Type();
        $catPHP->name = "Design only";
        $catPHP->icon = "fa-solid fa-pencil";
        $catPHP->save();
        
        $catLaravel = new Type();
        $catLaravel->name = "Fullstack";
        $catLaravel->icon = "fa-solid fa-gears";
        $catLaravel->save();
    }
}
