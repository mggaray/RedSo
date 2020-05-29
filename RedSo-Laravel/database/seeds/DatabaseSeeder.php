<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Posteo;

class DatabaseSeeder extends Seeder

{
     //
     // Seed the application's database.
     //
     // @return void
    public function run()
    {
        // $this->call(UsersTableSeeder::class);  


        //$usuarios = factory(App\User::class)->times(150)->create();  
        //EJECUTAR PRIMERO ESTA


       //$posteos = factory(App\Posteo::class)->times(500)->create(); 
        //LUEGO VERIFICAR EN LA DB EL ID MAX Y MIN DE LA TABLA USUARIOS Y MODIFICAR EL POST_FACTORY USER_ID

        $seguidos = App\User::All();

        App\User::All()->each(function ($user) use ($seguidos){
            $user->seguidos()->saveMany($seguidos->random(50));
        });
    }
}
