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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class); 

        $usuarios = factory(User::class)->times(50)->create();
        // $posteos = factory(Posteo::class)->times(50)->create(); 

        $seguidos = User::All();

        User::All()->each(function ($user) use ($seguidos){
            $user->seguidos()->saveMany($seguidos);
         });


=======
        
        // $this->call(UsersTableSeeder::class);  


        //$usuarios = factory(App\User::class)->times(499)->create();  EJECUTAR PRIMERO ESTA


        //$posteos = factory(App\Posteo::class)->times(490)->create(); LUEGO VERIFICAR EN LA DB EL ID MAX Y MIN DE 
        //LA TABLA USUARIOS Y MODIFICAR EL POST_FACTORY USER_ID

        //$seguidos = App\User::All();

      /*  App\User::All()->each(function ($user) use ($seguidos){
            $user->seguidos()->saveMany($seguidos->random(100));
         });*/
>>>>>>> a33b9188d5a5aeb2b5bc3eaa899f1449fb13a571
      }
    
}
