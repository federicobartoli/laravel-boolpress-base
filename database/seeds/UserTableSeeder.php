<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 5; $i++) {
              $user = new User;
              $user->name = $faker->name;
              $user->email = $faker->email;
              $user->password = Hash::make('Ciao');
              $user->save();
       }
    }
}
