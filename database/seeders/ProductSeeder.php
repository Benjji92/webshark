<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'TOMMY HILFIGER DANIEL',
            'image' => 'https://www.timestore.hu/images/w600/417989-1.webp',
            'price' => '44000',
        ]);

        Product::create([
            'name' => 'FABER FRASER',
            'image' => 'https://eu-images.contentstack.com/v3/assets/blt7dcd2cfbc90d45de/blt1c7dfe11ae67a47b/60dc114b15da443b102e957b/1-1_copy_68.jpg?format=pjpg&auto=webp&quality=60%2C90&width=828',
            'price' => '54000',
        ]);

        Product::create([
            'name' => 'LAYTON TERNION Acél',
            'image' => 'https://eu-images.contentstack.com/v3/assets/blt7dcd2cfbc90d45de/blt6ccceea1e1fc80cc/60dc10ddddcd520eeb8c7fb9/layton_ternion-21793-40mm.jpg?format=pjpg&auto=webp&quality=60%2C90&width=640',
            'price' => '40000',
        ]);
    }
}
