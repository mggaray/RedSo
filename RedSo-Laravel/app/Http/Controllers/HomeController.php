<?php
namespace App\Http\Controllers;
use App\Posteo;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;


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

    public function postear(Request $req)
    {  
        /* Validacion*/

    $reglas=[
    "posteo"=> "string|required|min:1|max:255",
    "imagen"=> "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048"    
    ];

    $errores=[
     "required"=>"La publicacion no puede estar vacia!",
     "string"=> "Solo se puede publicar texto",
     "min"=> "La publicacion tiene que tener un minimo de :min caracteres",
     "max"=> "La publicacion tiene un límite de :max caracteres"
    ];

      $this->validate($req,$reglas,$errores);

 /*Guarda en DB*/

      $posteo = new Posteo();
      $posteo->user_id=Auth::user()->id; 
      $posteo->fechaCreacion=Carbon::now();    
      $posteo->contenido=$req["posteo"];
       if($req->file("imagen")!=null){
        $ruta= $req->file("imagen")->store("public");
        $rutaImagen=basename($ruta);   
       }
       else{$rutaImagen=null;}
      $posteo->nombreImagen=$rutaImagen;
      $posteo->save();
      return redirect("home");
    }

}
