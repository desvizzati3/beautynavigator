<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Skintone;
use App\Models\Undertone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Skintone::create([
            'nama' => 'Fair-Light'
        ]);

        Skintone::create([
            'nama' => 'Medium-Tan'
        ]);

        Skintone::create([
            'nama' => 'Dark-Deep'
        ]);

        Skintone::create([
            'nama' => 'All'
        ]);

        Undertone::create([
            'nama' => 'Cool'
        ]);

        Undertone::create([
            'nama' => 'Neutral'
        ]);

        Undertone::create([
            'nama' => 'Warm'
        ]);

        Undertone::create([
            'nama' => 'All'
        ]);

        Category::create([
            'nama' => 'Complexion'
        ]);

        Category::create([
            'nama' => 'Lip'
        ]);

        Category::create([
            'nama' => 'Eye'
        ]);

        Category::create([
            'nama' => 'Blush'
        ]);

        Category::create([
            'nama' => 'Countour'
        ]);
    }
}
