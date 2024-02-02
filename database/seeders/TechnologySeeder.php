<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                "name" => "Artificial intelligence",
            ],
            [
                "name" => "Communication technology",
            ],
            [
                "name" => "Blockchain technology",
            ],
            [
                "name" => "Business technology",
            ],
            [
                "name" => "3D printing",
            ],
            [
                "name" => "Robotics",
            ],
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->fill($technology);
            $newTechnology->save();

        }
    }
}
