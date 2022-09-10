<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path('articleimg');
        return [
            'title' => $this->faker->words(rand(3, 6), true),
            'description' => $this->faker->paragraph(3),
            'image' => $this->faker->image($path, 300, 300)
        ];
    }
}
