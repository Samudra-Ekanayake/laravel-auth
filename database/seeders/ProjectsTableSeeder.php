<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       /*  $newProject = new Project();
        $newProject->name = "e-commerce";
        $newProject->description = "un bellissimo sito di e-commerce per compare cose belle";
        $newProject->creation_date = "2024-05-03";
        $newProject->cover_image = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
        $newProject->save(); */

        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();
            $newProject->name = $faker->sentence(4);
            $newProject->description = $faker->paragraph(1);
            $newProject->creation_date = $faker->dateTimeBetween('-2 years', 'now');
            $newProject->cover_image = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
            $newProject->type_id = $faker->numberBetween(1, 4);
            $newProject->save();

        }
    }
}
