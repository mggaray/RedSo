<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarioLogueado = Auth::user();
        if (isset($usuarioLogueado)) {
            $vac = compact('usuarioLogueado');
            return view('home', $vac);
        }
        else {
            return view('/index');
        }
        }
}
