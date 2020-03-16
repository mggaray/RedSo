<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'usuario' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
            'ciudad' => ['string', 'max:255'], 
            'cumpleanios' => ['required','date'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
        $user = User::create([

            'nombre' => $data['nombre'],
            'usuario' =>$data['usuario'],
            'email' => $data['email'],
            'apellido' => $data['apellido'],
            'ciudad' =>$data['ciudad'], 
            'cumpleanios' =>$data['cumpleanios'],
            'password' => Hash::make($data['password']),
        ]);

        if (request()->hasFile("foto_perfil")) {
            $foto_perfil = request()->file("foto_perfil")->getClientOriginalName();
            request()->file("foto_perfil")->storeAs("foto_perfil",$user->id."/".$foto_perfil, '');
            $user->update(["foto_perfil"=>$foto_perfil]);
        }
        return $user;
    }
}
