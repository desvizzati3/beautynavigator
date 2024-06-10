<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Skintone;
use App\Models\Undertone;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'nama_produk' => fake()->sentence(rand(2, 3), false),
            'brand' => fake()->word(),
            'deskripsi' => fake()->text(),
            'harga' => fake()->text(),
            'skintone_id' => Skintone::inRandomOrder()->first()->id,
            'undertone_id' => Undertone::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            //'author_id' => User::factory(),
        ];
    }
}
