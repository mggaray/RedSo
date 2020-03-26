<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Posteo;

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

        $usuarios = factory(User::class)->times(50)->create();
        // $posteos = factory(Posteo::class)->times(50)->create(); 

        $seguidos = User::All();

        User::All()->each(function ($user) use ($seguidos){
            $user->seguidos()->saveMany($seguidos);
         });


      }
    
}
