<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Posteo;
use App\User;
use Auth; 

class ComentariosController extends Controller
{
    function comentar (Request $req) {  

        /* Validacion*/

       $reglas=[
           "comentario"=> "string|required|min:1|max:255",  
           ];
       
           $errores=[
            "required"=>"La publicacion no puede estar vacia!",
            "string"=> "Solo se puede publicar texto",
            "min"=> "La publicacion tiene que tener un minimo de :min caracteres",
            "max"=> "La publicacion tiene un límite de :max caracteres"
           ];
       
             $this->validate($req,$reglas,$errores); 

             /*Guarda en DB*/ 

             $comentario = new Comentario(); 
             $comentario->post_id=$req['postId'];   
             $comentario->contenido=$req["comentario"]; 
             $comentario->user_id = Auth::user()->id;
             $comentario->save(); 
             $posteo = Posteo::find($req['postId']);  
             $vac = compact('posteo'); 
           
             return view("posteo",$vac);

   }

    public function comentario($id)
    {

        $posteo = Posteo::find($id);  
            $vac = compact('posteo'); 
                
            return view("posteo",$vac);
    }
}
