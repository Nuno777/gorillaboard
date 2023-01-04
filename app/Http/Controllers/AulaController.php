<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Aula;
use App\Models\Desporto;
use App\Models\UserDesporto;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aula = Aula::all();
        $desportos = Desporto::all();
        return view('adminPage.inscricao', compact('desportos', 'aula'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aula');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Desporto $desporto)
    {
        request()->validate([
            'naulas' => 'required'
        ]);

        $aula = new UserDesporto();
        $aula->user_id = Auth::user()->id;
        $aula->desporto_id = $desporto->id;
        $aula->num_inscricoes = request('naulas');
        $aula->save();

        return redirect('/')->with('message', 'Inscrição na aula com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show(Aula $aula)
    {
        $aula = Aula::all();
        $desportos = Desporto::all();
        return view('adminPage.inscricao', compact('desportos', 'aula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(Aula $aula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aula $aula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        //
    }
}
