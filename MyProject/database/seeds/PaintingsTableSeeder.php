<?php

use Illuminate\Database\Seeder;
use App\Painting;

class PaintingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $painting = [
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ],
            [
                'author' => 'Sandro Botticelli',
                'period' => 'Rinascimento',
                'image' => 'https://m.media-amazon.com/images/I/71+Vu-OuO8L._AC_SX450_.jpg',
                'price' => '99999999',
            ]
        ];


        foreach ($painting as $picture) {
            $painting = new Painting();
            $painting->author = $picture['author'];
            $painting->period = $picture['period'];
            $painting->image = $picture['image'];
            $painting->price = $picture['price'];
            $painting->save();
        }
    }
}
