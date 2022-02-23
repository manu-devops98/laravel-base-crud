<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for ($i = 0; $i < 100; $i++) {
        //     $comics = new Book();
        //     $comics->title = $faker->word();
        //     $comics->genre = $faker->words(3, true);
        //     $comics->authors = $faker->words(3, true);
        //     $comics->writers = $faker->words(3, true);
        //     $comics->edition = $faker->word();
        //     $comics->publisher = $faker->word();
        //     $comics->isbn = $faker->isbn13();
        //     $comics->photo = $faker->imageUrl(640, 480, 'monitors', true);
        //     $comics->price = $faker->randomFloat(1, 5, 100);
        //     $comics->save();
        // }
    }
}
