<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::to('gonzalop67@gmail.com')
        ->send(new ContactanosMailable($request->all()));

        // session()->flash('info', 'Mensaje enviado');

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
