<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Skintone;
use App\Models\Undertone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nama' => 'Complexion',
            'image' => 'categories/complexion.jpeg'
        ]);

        Category::create([
            'nama' => 'Lip',
            'image' => 'categories/lip.jpeg'
        ]);

        Category::create([
            'nama' => 'Eye',
            'image' => 'categories/eye.jpeg'
        ]);

        Category::create([
            'nama' => 'Face',
            'image' => 'categories/face.jpeg'
        ]);

        Category::create([
            'nama' => 'Powder',
            'image' => 'categories/powder.jpeg'
        ]);

        $sandhika = User::create([
            'name' => 'sandhikagalih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);

        $aae = Product::create([
            'nama_produk' => 'TWC Buttercream',
            'brand' => 'luxcrime',
            'deskripsi' => 'Anda dapat menambahkan produk lain dengan cara yang sama dengan menyesuaikan nilai untuk setiap kolom sesuai dengan kebutuhan Anda.',
            'harga' => '76.000',
            'image' => 'produk/luxbut.jpeg',
            'skintone_id' => 1,
            'undertone_id' => 1,
            'category_id' => 5
        ]);

        $cca = Product::create([
            'nama_produk' => 'Dark Foundie',
            'brand' => 'M.A.C',
            'deskripsi' => 'Anda dapat menambahkan produk lain dengan cara yang sama dengan menyesuaikan nilai untuk setiap kolom sesuai dengan kebutuhan Anda.',
            'harga' => '215.000',
            'image' => 'produk/mac.jpg',
            'skintone_id' => 3,
            'undertone_id' => 3,
            'category_id' => 1
        ]);

        $bbd = Product::create([
            'nama_produk' => 'Rose Divine',
            'brand' => 'McGrath',
            'deskripsi' => 'Anda dapat menambahkan produk lain dengan cara yang sama dengan menyesuaikan nilai untuk setiap kolom sesuai dengan kebutuhan Anda.',
            'harga' => '355.000',
            'image' => 'produk/patblush.jpeg',
            'skintone_id' => 2,
            'undertone_id' => 2,
            'category_id' => 4
        ]);

        $ddb = Product::create([
            'nama_produk' => 'Glasting Melting Balm',
            'brand' => 'Roman',
            'deskripsi' => 'Anda dapat menambahkan produk lain dengan cara yang sama dengan menyesuaikan nilai untuk setiap kolom sesuai dengan kebutuhan Anda.',
            'harga' => '108.000',
            'image' => 'produk/roman.jpeg',
            'skintone_id' => 4,
            'undertone_id' => 4,
            'category_id' => 2
        ]);

        $abc = Product::create([
            'nama_produk' => 'Caramel Brown',
            'brand' => 'Huda Beauty',
            'deskripsi' => 'Anda dapat menambahkan produk lain dengan cara yang sama dengan menyesuaikan nilai untuk setiap kolom sesuai dengan kebutuhan Anda.',
            'harga' => '199.000',
            'image' => 'produk/huda.jpeg',
            'skintone_id' => 1,
            'undertone_id' => 2,
            'category_id' => 3
        ]);

        Review::factory(30)->recycle([
            $aae,
            $cca,
            $bbd,
            $ddb,
            $abc,
            Product::factory(3)->create(),
            $sandhika,
            User::factory(4)->create()
        ])->create();
    }
}
