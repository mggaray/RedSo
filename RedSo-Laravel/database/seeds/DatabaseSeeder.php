<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class); 
        $seguidos = App\User::All();

        App\User::All()->each(function ($user) use ($seguidos){
            $user->seguidos()->saveMany($seguidos);
         });
      }
    
}
