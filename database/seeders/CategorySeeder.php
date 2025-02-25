<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catJS = new Category();
        $catJS->name = "Frontend";
        $catJS->icon = "fa-brands fa-firefox";
        $catJS->save();
        
        $catVue = new Category();
        $catVue->name = "Backend";
        $catVue->icon = "fa-solid fa-server";
        $catVue->save();
        
        $catPHP = new Category();
        $catPHP->name = "Design only";
        $catPHP->icon = "fa-solid fa-pencil";
        $catPHP->save();
        
        $catLaravel = new Category();
        $catLaravel->name = "Fullstack";
        $catLaravel->icon = "fa-solid fa-gears";
        $catLaravel->save();
    }
}
