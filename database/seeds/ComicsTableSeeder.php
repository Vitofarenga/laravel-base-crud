<?php

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20;$i++){
           $newComic = new Comic();
           $newComic->title = $faker->realText(40);
           $newComic->description = $faker->realText(200);
           $newComic->thumb = $faker->imageUrl(500, 300, "art");
           $newComic->price = $faker->boolean();
           $newComic->series = $faker->realText(40);
           $newComic->sale_date = $faker->date();
           $newComic->type = $faker->randomElement();
           $newComic->save();
        }
    }
}
