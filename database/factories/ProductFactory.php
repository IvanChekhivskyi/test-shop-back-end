<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = rtrim(fake()->sentence(3), ".") ;

        return [
            'name' => $name,
            'price' => fake()->randomFloat(2, 1, 100000),
            'url_key' => Str::slug($name),
            'description' => fake()->sentence(),
            'image_path' => "/images/" . fake()->image(public_path('images'), fullPath: false),
            'sale' => rand(0, 1)
        ];
    }
}
