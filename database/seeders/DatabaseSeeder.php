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

        $mei = User::create([
            'name' => 'Nabila Meirani',
            'email' => 'mei@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);

        $desva = User::create([
            'name' => 'Desvania',
            'email' => 'desva@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);

        $cipa = User::create([
            'name' => 'Syifa Hemi',
            'email' => 'cipa@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);

        $perle = Product::create([
            'nama_produk' => 'Perle Cushion',
            'brand' => 'Somethinc',
            'deskripsi' => 'Cushion dengan tahan uji 12 jam, Full Coverage, Non-Oxidized, Tidak dempul & Ringan!',
            'harga' => '120.000',
            'image' => 'produk/perle.jpg',
            'skintone_id' => 1,
            'undertone_id' => 1,
            'category_id' => 1
        ]);

        $porclain = Product::create([
            'nama_produk' => 'Make Over Silky Smooth',
            'brand' => 'Make Over',
            'deskripsi' => 'Teksturnya yang halus membantu melembapkan dan menyerap kelebihan minyak, menciptakan tampilan segar dan cerah sepanjang hari!',
            'harga' => '145.000',
            'image' => 'produk/porclain.jpg',
            'skintone_id' => 1,
            'undertone_id' => 2,
            'category_id' => 5
        ]);

        $blushtwc = Product::create([
            'nama_produk' => 'Flushy-Cheek Blush Blueberry Muffin',
            'brand' => 'luxcrime',
            'deskripsi' => 'An innovative cream blush with a cushiony texture that transforms into a velvety powder for a second-skin look and comfortable feel. The buildable formula provides a long wear sheer-to-medium, cloud like wash of color. It glides on weightlessly and evenly over skin and builds easily for custom color payoff.',
            'harga' => '79.000',
            'image' => 'produk/blush3.jpg',
            'skintone_id' => 1,
            'undertone_id' => 3,
            'category_id' => 4
        ]);

        $youbeige = Product::create([
            'nama_produk' => 'Loose Powder Beige',
            'brand' => 'YOU',
            'deskripsi' => 'Bedak tabur ringan yang membantu mengontrol minyak berlebih pada wajah, serta membuat kulit tampak lebih halus dan segar',
            'harga' => '49.500',
            'image' => 'produk/youbeige.jpg',
            'skintone_id' => 1,
            'undertone_id' => 4,
            'category_id' => 5
        ]);

        $lipbnb = Product::create([
            'nama_produk' => 'LipTint Barenbliss',
            'brand' => 'Barenbliss',
            'deskripsi' => 'Lip tint beraroma buah persik bertekstur gel ringan yang melapisi bibir dengan 6 kandungan kebaikan alami untuk tampilan bibir yang segar dan lembap.',
            'harga' => '59.000',
            'image' => 'produk/lipbnb.jpg',
            'skintone_id' => 2,
            'undertone_id' => 1,
            'category_id' => 2
        ]);

        $juvia = Product::create([
            'nama_produk' => 'The Warrior Eyeshadow Palette',
            'brand' => 'Juvias Place',
            'deskripsi' => 'A nine-colour eyeshadow palette. Enclosed in a beautiful metallic case, The Warrior Eyeshadow Palette is filled with golds, bronzes and browns to make your eyes pop. Drawing on rich, earthy tones in a variety of matte and shimmer finishes, these shades bring depth and dimension to the eyes, creating a long-lasting, burnished glow.',
            'harga' => '525.000',
            'image' => 'produk/juvia.jpg',
            'skintone_id' => 2,
            'undertone_id' => 2,
            'category_id' => 3
        ]);

        $neon = Product::create([
            'nama_produk' => 'Neon Pink Blush',
            'brand' => 'Make Up For Ever',
            'deskripsi' => 'Neon blush? OMG, its a match made in heaven! Yep, thats the first thing we said when we checked which beauty trend has been buzzing on IG and TikTok. If you have been trying to hit the home run with trending neon makeup but lack the bravado to pull off its eccentricity, here’s the real deal for you. The neon blush trend!',
            'harga' => '475.000',
            'image' => 'produk/neon.jpg',
            'skintone_id' => 2,
            'undertone_id' => 3,
            'category_id' => 4
        ]);

        $mousse = Product::create([
            'nama_produk' => 'Mousse Matte Lipstick',
            'brand' => 'Italia Deluxe',
            'deskripsi' => 'The signature Mousse Matte Lipsticks are as beautiful as they look! It has a unique, soft mousse formula that looks pigmented and feels lightweight on the lips. Its velvety-smooth and long-lasting. The collection has every shade you need for any makeup look and comes in a variety of warm and cool undertones to beautify all skin types',
            'harga' => '229.200',
            'image' => 'produk/mousse.jpg',
            'skintone_id' => 2,
            'undertone_id' => 4,
            'category_id' => 2
        ]);

        $sugar = Product::create([
            'nama_produk' => 'Dream Cover Mattifying Compact',
            'brand' => 'SUGAR Cosmetics',
            'deskripsi' => 'Suits light skin tones Mattifying compact powder that controls oil for 5+ hours Enriched with Vitamin E and has SPF15 minerals that protect skin from sun damage Can be used to achieve an even complexion and blur pores Helps set your base makeup perfectly',
            'harga' => '262.300',
            'image' => 'produk/sugar.jpg',
            'skintone_id' => 3,
            'undertone_id' => 1,
            'category_id' => 5
        ]);

        $tirtir = Product::create([
            'nama_produk' => '51N Fudge',
            'brand' => 'TIRTIR',
            'deskripsi' => 'TIRTIR Mask Fit Red Cushion, the top pick in Japan, offers unbeatable coverage and all-day wear. Get the flawless look thats taking Japan by storm and be ready for anything!',
            'harga' => '409.000',
            'image' => 'produk/tirtir.jpg',
            'skintone_id' => 3,
            'undertone_id' => 2,
            'category_id' => 1
        ]);

        $tirtir33 = Product::create([
            'nama_produk' => '55N Espresso',
            'brand' => 'TIRTIR',
            'deskripsi' => 'TIRTIR dense and fine powder provides buildable coverage, concealing redness, blemishes, and under-eye bags for a glassy skin appearance that suits your style while delivering an incredible 72-hour makeup endurance. Enjoy flawless, long-lasting coverage with no fading, cracking, caking, creasing, or transferring.',
            'harga' => '409.000',
            'image' => 'produk/tirtir33.jpg',
            'skintone_id' => 3,
            'undertone_id' => 3,
            'category_id' => 1
        ]);

        $moira = Product::create([
            'nama_produk' => 'Loveheat Cream Blush',
            'brand' => 'MOIRA',
            'deskripsi' => 'MOIRA Loveheat Cream Blush is a beautiful lightweight buildable cream formula that melts and blends with ease. Infused with Coconut Oil and Aloe Vera extract, this creamy formula will leave a natural dewy flush finish. Six shades from every day to bold for every complexion.',
            'harga' => '261.000',
            'image' => 'produk/moira.jpg',
            'skintone_id' => 3,
            'undertone_id' => 4,
            'category_id' => 4
        ]);

        $emina = Product::create([
            'nama_produk' => 'Daily Matte',
            'brand' => 'emina',
            'deskripsi' => 'Loose powder emina yang ini sangat coco untuk daily. Dimana kayak kuliah maupun sekolah. Butiran loose powdernya tidak terlalu kasar. warnanya terlihat light, karena sesuai dengan shadenya yaitu light beige. Tahan hingga kurang lebih 8 jam. Cukup mengontrol minyak pada wajah.',
            'harga' => '39.000',
            'image' => 'produk/emina.jpg',
            'skintone_id' => 4,
            'undertone_id' => 1,
            'category_id' => 5
        ]);

        $dior = Product::create([
            'nama_produk' => 'Backstage Eyeshadow',
            'brand' => 'DIOR',
            'deskripsi' => 'Inspired by the energy backstage at the Dior runway shows, this makeup palette combines 9 ultra-pigmented, easy-to-blend eyeshadows with matte, pearlescent, metallic, holographic and glittery finishes. Each harmony is the interpretation of a colour theme, available in complementary shades to achieve a multitude of looks.',
            'harga' => '899.900',
            'image' => 'produk/dior.jpg',
            'skintone_id' => 4,
            'undertone_id' => 2,
            'category_id' => 3
        ]);

        $ilia = Product::create([
            'nama_produk' => 'Multi Stick Blush',
            'brand' => 'ILIA',
            'deskripsi' => 'This creamy, multi-use formula comes in a twist-up stick for easy application on the go. No tools required: Simply swipe and blend for skin that looks and feels alive. Keep it simple with your favorite Multi-Stick shade, or mix, match, and layer to create a customized look. Available in both natural and luminous finishes.',
            'harga' => '589.000',
            'image' => 'produk/ilia.jpg',
            'skintone_id' => 4,
            'undertone_id' => 3,
            'category_id' => 4
        ]);

        $dear = Product::create([
            'nama_produk' => 'Perfect Matte',
            'brand' => 'Dear Me Beauty',
            'deskripsi' => 'A lingering warmth of bold berry red that easily transforms moods, take it out on a serious note, or wear it down for a day’s stroll. take cue from this summer lip, and feel its allure.',
            'harga' => '129.000',
            'image' => 'produk/dear.jpg',
            'skintone_id' => 4,
            'undertone_id' => 4,
            'category_id' => 2
        ]);

        $aae = Product::create([
            'nama_produk' => 'TWC Buttercream',
            'brand' => 'luxcrime',
            'deskripsi' => 'Luxcrime Blur & Cover Two Way cake instantly mattifies a range of skin tones. Its formulated to transform the look of your skin with soft-focus powder to smooth away and cover imperfections perfectly. This innovative two way cake is enriched with ultra-soft, silky texture powders with velvet matte finish.',
            'harga' => '76.000',
            'image' => 'produk/luxbut.jpeg',
            'skintone_id' => 1,
            'undertone_id' => 1,
            'category_id' => 5
        ]);

        $cca = Product::create([
            'nama_produk' => 'Dark Foundie',
            'brand' => 'M A C',
            'deskripsi' => 'This creamy foundation, delivers one of the most natural-looking finishes weve seen from a stick formula.',
            'harga' => '215.000',
            'image' => 'produk/mac.jpg',
            'skintone_id' => 3,
            'undertone_id' => 3,
            'category_id' => 1
        ]);

        $bbd = Product::create([
            'nama_produk' => 'Rose Divine',
            'brand' => 'McGrath',
            'deskripsi' => 'Luxuriate in the softer side of the Divine Rose Garden. The iconic first Palette in the Divine Rose series, this endlessly versatile collection blooms with an array of lush finishes for eyes and cheeks. The colour story ventures from rich rose-infused neutrals to burnished bronzes to opalescent pink before finishing on a resplendent rose duochrome. Each shadow combines exquisitely creamy buildability with intense saturation and brilliance. All shades are designed to create universally flattering eye looks for every skin tone, ranging from sublime sweetness to smokey seduction.',
            'harga' => '355.000',
            'image' => 'produk/patblush.jpeg',
            'skintone_id' => 2,
            'undertone_id' => 2,
            'category_id' => 4
        ]);

        $ddb = Product::create([
            'nama_produk' => 'Glasting Melting Balm',
            'brand' => 'Roman',
            'deskripsi' => 'The Glasting Melting Balm is a moisturizing lip tint that provides a vivid and distinct color with a transparent and glossy finish. It is formulated with plant-based moisturizing oil and does not dry out1. The balm envelops the lips in an elastic water film, leaving a water gloss effect.',
            'harga' => '108.000',
            'image' => 'produk/roman.jpeg',
            'skintone_id' => 4,
            'undertone_id' => 4,
            'category_id' => 2
        ]);

        $abc = Product::create([
            'nama_produk' => 'Caramel Brown',
            'brand' => 'Huda Beauty',
            'deskripsi' => 'Huda Beauty Caramel Brown #4 is a moderately warm-toned, light-medium brown with a matte finish. It is an eyeshadow that is permanent in this palette: Caramel Brown.',
            'harga' => '199.000',
            'image' => 'produk/huda.jpeg',
            'skintone_id' => 1,
            'undertone_id' => 2,
            'category_id' => 3
        ]);

        Review::factory(200)->recycle([
            $blushtwc,
            $perle,
            $porclain,
            $lipbnb,
            $youbeige,
            $ilia,
            $dior,
            $emina,
            $moira,
            $tirtir33,
            $tirtir,
            $neon,
            $sugar,
            $juvia,
            $mousse,
            $dear,
            $aae,
            $cca,
            $bbd,
            $ddb,
            $abc,
            $sandhika,
            $mei,
            $cipa,
            $desva,
            User::factory(49)->create()
        ])->create();
    }
}
