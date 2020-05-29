<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\MailContacto;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    public function envio()
    {
        $mensaje = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);
        Mail::to('contacto@redso.com')->send(new MailContacto($mensaje));
        return redirect()->back();
    }
}
