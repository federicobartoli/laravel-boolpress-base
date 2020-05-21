<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
// php artisan db:seed --class=PostsTableSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run(Faker $faker)
       {
              for ($i=0; $i < 20; $i++) {
                     $post = new Post;
                     $post-> title = $faker->realText($maxNbChars = 20, $indexSize = 2);
                     $post-> body = $faker->realText($maxNbChars = 200, $indexSize = 2);
                     $post-> slug = Str::slug($post->title, '-') . '-' . Carbon::now();
                     $post-> author = 'name';
                     $post-> published = 1;
                     $post->save();
              }
       }
}
