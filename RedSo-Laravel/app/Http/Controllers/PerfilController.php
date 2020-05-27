<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;
use Illuminate\Support\Facades\Auth;
use App\User;



class PerfilController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function perfil()
    {
        $usuarioLogueado = Auth::user(); 
        $posteos = Posteo::where('user_id','=',$usuarioLogueado['id']) 
        ->orderBy('fechaCreacion','desc')
        ->simplePaginate(5); 
        
        $vac = compact('usuarioLogueado','posteos');
        return view('perfil', $vac);
    } 

    public function editarPerfil(){
        $usuarioLogueado = Auth::user(); 
        $vac= compact('usuarioLogueado');
        return view('editarPerfil', $vac);
    }

    public function editarDatosPerfil(Request $data){
        $usuario=Auth::user();
            $usuario->nombre = $data['nombre'];
            $usuario->usuario =$data['usuario'];
            $usuario->apellido = $data['apellido'];
            $usuario->ciudad =$data['ciudad'];
            $usuario->cumpleanios =$data['cumpleanios'];

            if (request()->hasFile("foto_perfil")) {
                $foto_perfil = request()->file("foto_perfil")->getClientOriginalName();
                request()->file("foto_perfil")->storeAs("foto_perfil",$usuario->id."/".$foto_perfil, '');
                $usuario->update(["foto_perfil"=>$foto_perfil]);
            } 

        $usuario->save();
        return redirect()->to('perfil');
    }


    public function mostrarBusqueda(){
        $usuarios = []; 
        $vac = compact('usuarios');
        return view('busqueda',$vac);
    } 

    public function buscarUsuario(Request $req){ 
        $usuarioLogueado = Auth::user(); 
        $usuarios = User::where('usuario','like',$req['buscar'].'%') ->simplePaginate(10); 
        $vac = compact('usuarios'); 
        return view('busqueda',$vac);
    } 

    public function mostrarUser(Request $req) {
        $usuario = User::find($req['id']);  
        $usuarioLogueado = Auth::user(); 
        $posteos = Posteo::where('user_id','=',$usuario['id']) 
        ->orderBy('fechaCreacion','desc')
        ->simplePaginate(10);

      if ($usuario['id'] == $usuarioLogueado['id']) {
          return redirect()->to('perfil');
      }

        $bandera = false;
        foreach ($usuarioLogueado->seguidos as $seguido) {
            if ($seguido['id']==$usuario['id']) {
                $bandera = true; 
            break;
            }
        }
        $vac = compact('usuario','bandera','posteos'); 
        return view('perfilUser',$vac); 
    } 

    public function agregarUsuario(Request $req) { 
        $user = Auth::user();
        $user -> seguidos() ->attach($req['id']); 
        return redirect('users/' . $req['id']);
    } 
    
    public function dejarUsuario(Request $req) { 
        $user = Auth::user();
        $user -> seguidos() ->detach($req['id']); 
        return redirect('users/' . $req['id']);
    } 
    public function posteos()
    {
        $usuarioLogueado = Auth::user();
        $posteos= Posteos::all();
        $vac= compact("usuarioLogueado","posteos");
        return view('perfil', $vac);
    } 

    public function borrarPosteo(Request $req) { 
        
        $post = Posteo::find($req['postId']); 
        $postUserId=$post->user_id;
        $usuarioLogueado = Auth::user();
        if(($postUserId == $usuarioLogueado->id) || $usuarioLogueado->admin()) {
        $post ->comentarios() ->delete();
        $post -> delete(); 
    }
        return redirect('users/' . $req['userId']);
    }

}




    

