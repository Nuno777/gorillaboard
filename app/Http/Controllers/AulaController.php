<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
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
        return view('adminPage.presenca', compact('desportos', 'aula'));
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
        Log::channel('main')->alert('ukhgoi');
        $linhas = UserDesporto::all();
        return view('adminPage.presenca', compact('linhas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDesporto $userDesporto)
    {
        return view('adminPage.presencaEdit', compact('userDesporto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDesporto $userDesporto, Desporto $desporto)
    {
        //Validação do formulario de noticia
        request()->validate([
            'npresen' => 'required'
        ]);

        //Inserção de dados no formulario de noticia
        $userDesporto->num_presencas = request('npresen');
        $userDesporto->save();
        Log::channel('main')->info('ID '.Auth::user()->id.' editou as inscrições de '.$userDesporto->num_inscricoes.'/'.$userDesporto->num_presencas.' do utilizador '.$userDesporto->user_id = Auth::user()->id.' do desporto '.$userDesporto->desporto_id);
        return redirect()->route('presenca.show')->with('message', 'Informacoes da notícia alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDesporto $userDesporto)
    {
        dump('ID '.Auth::user()->id.' eliminou a inscrição '.$userDesporto->id.' com '.$userDesporto->num_inscricoes.'/'.$userDesporto->num_presencas.' de presenças');
        $userDesporto->delete();
        Log::channel('main')->alert('ID '.Auth::user()->id.' eliminou a inscrição '.$userDesporto->id.' com '.$userDesporto->num_inscricoes.'/'.$userDesporto->num_presencas.' de presenças');
        return redirect()->route('presenca.show')->with('message', 'Notícia eliminada com sucesso!!');
    }
}
