<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PracticasController extends Controller
{
    public function ver_contacto(){
        return view('contacto');
    }

    public function enviar_contacto(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Enviar siempre al correo del administrador independiente del correo proporcionado
        Mail::to('garciaarenasluis53@gmail.com')->send(new ContactFormMail($data));

        return back()->with('status', 'Tu mensaje ha sido enviado correctamente.');
    }
}