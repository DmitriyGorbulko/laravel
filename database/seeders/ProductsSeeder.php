<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'LG',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 9999.00
          ]);

          DB::table('products')->insert([
            'name' => 'Samsung Galaxy S21 Ultra',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://avatars.mds.yandex.net/get-mpic/4407580/img_id841031547064992833.jpeg/orig',
            'price' => 9999.00
          ]);

          DB::table('products')->insert([
            'name' => 'Xiaomi Redmi 9A',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://c.dns-shop.ru/thumb/st4/fit/0/0/d4ce708504fc2a075e23c6d55170e569/d33b77752b9d72727c5f4d363fb99bf46b2829c82c97f133bfc220ffd399428d.jpg.webp',
            'price' => 8999.00
          ]);

          DB::table('products')->insert([
            'name' => 'IPhone 7',
            'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
            'photo' => 'https://c.dns-shop.ru/thumb/st4/fit/0/0/4d99a167663d5314d09b95e222315149/9f7d73ba14a6ce0c453b2c26414ff38baba910c426d01d394b4a057d515e20e1.jpg.webp',
            'price' => 9999.00
          ]);
          
    }
}
