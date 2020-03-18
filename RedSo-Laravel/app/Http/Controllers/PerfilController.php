<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Posteo;

class PerfilController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function perfil()
    {
        $usuarioLogueado = Auth::user();
        $vac = compact('usuarioLogueado');
        return view('perfil', $vac);
    }
   
    public function posteos()
    {
        $usuarioLogueado = Auth::user();
        $posteos= Posteos::all();
        dd($posteos);
        $vac= compact("usuarioLogueado","posteos");
        return view('perfil', $vac);


    }

}
