<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isi' => fake()->text(),
            'user_id' => User::factory(),
            'product_id' => Product::factory()
        ];
    }
}

//yang bener dibawah ini
// $users = User::factory(5)->create();
// $products = Product::factory(8)->create();
// $reviews = Review::factory(20)->make()->each(function ($review) use ($users, $products) {
//     $review->user_id = $users->random()->id;
//     $review->product_id = $products->random()->id;
//     $review->save();
// });
// ------------------------------------------------------------------------------------------------

//jika class not found
//composer dumpautoload
//php artisan optimize:clear


// App\Models\Product::factory(8)->create()

// $users = App\Models\User::all();                                                
// $products = App\Models\Product::all();
// App\Models\Review::factory(20)->make()->each(function ($review) use ($users, $products) {
//     $review->user_id = $users->random()->id;
//     $review->product_id = $products->random()->id;
//     $review->save();
// });

//App\Models\Product::factory(8)->recycle([App\Models\User::factory(5)->create(), App\Models\Review::factory(20)->create()])->create()
