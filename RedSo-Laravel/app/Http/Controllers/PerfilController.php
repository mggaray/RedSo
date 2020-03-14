<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
