<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Storage::makeDirectory('articleimg');
        $path = public_path('uploads/articleimg');
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(3),
            'image' => $this->faker->imageUrl(600, 338),
        ];
    }
}
