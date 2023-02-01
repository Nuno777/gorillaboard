<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactosRequest;
use App\Http\Requests\EnviarEmailContactosRequest;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('adminPage.adminContactos', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactos = new Contacto();
        return view('contactos', compact("contactos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->validate(
            [
                'nome_Contactos' => 'required',
                'email_Contactos' => 'required',
                'menssagem_Contactos' => 'required'
            ]

        );
        $contacto = new Contacto();
        $contacto->fill($fields);
        $contacto->save();
        return redirect()->route('contactos')->with('success', 'Contacto criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('adminPage.adminContactosMenssagem', compact("contacto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function responder(Contacto $contacto)
    {
        return view('adminPage.adminContactosResponder', compact("contacto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function enviarEmail(EnviarEmailContactosRequest $request, Contacto $contacto)
    {
        $fields = $request->validated();

        Mail::to($contacto->email_Contactos)->send(new SendMail($fields['menssagem_Contactos']));

        $contacto->resposta = $fields['menssagem_Contactos'];
        $contacto->save();

        return redirect()->route('admincontactos')->with('success', 'Contacto enviado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('admincontactos')->with(
            'success',
            'Contacto eliminado com sucesso'
        );
    }
}
