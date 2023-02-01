<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Aula;
use App\Models\Desporto;
use App\Models\User;
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
        return view('adminPage.presencas.presenca', compact('desportos', 'aula'));
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
    public function store(Request $request, Desporto $desporto,$id)
    {
        request()->validate([
            'naulas' => 'required'
        ]);

        $aula = new UserDesporto();
        $aula->user_id = Auth::user()->id;
        $aula->desporto_id = $desporto->id;
        $aula->num_inscricoes = request('naulas');
        $aula->save();

        return route('/')->with('message', 'Inscrição na aula com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $linhas = UserDesporto::all();
        return view('adminPage.presencas.presencaAll', compact('linhas'));
    }
    public function showSurf()
    {
        $linhas = UserDesporto::where('desporto_id', 1)->orderby('id')->get();
        return view('adminPage.presencas.presenca', compact('linhas'));
    }
    public function showSkate()
    {
        $linhas = UserDesporto::where('desporto_id', 2)->orderby('id')->get();
        return view('adminPage.presencas.presenca', compact('linhas'));
    }
    public function showBodyboard()
    {
        $linhas = UserDesporto::where('desporto_id', 3)->orderby('id')->get();
        return view('adminPage.presencas.presenca', compact('linhas'));
    }
    public function showDownhill()
    {
        $linhas = UserDesporto::where('desporto_id', 4)->orderby('id')->get();
        return view('adminPage.presencas.presenca', compact('linhas'));
    }
    public function showPaddle()
    {
        $linhas = UserDesporto::where('desporto_id', 5)->orderby('id')->get();
        return view('adminPage.presencas.presenca', compact('linhas'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDesporto $userDesporto)
    {
        return view('adminPage.presencas.presencaEdit', compact('userDesporto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDesporto $userDesporto,Desporto $desporto)
    {
        request()->validate([
            'npresen' => 'required'
        ]);

        $userDesporto->num_presencas = request('npresen');
        $userDesporto->save();
        Log::channel('main')->info('ID ' . Auth::user()->id . ' editou a presença de ' . $userDesporto->num_inscricoes . '/' . $userDesporto->num_presencas . ' do aluno ' . $userDesporto->user_id = Auth::user()->id . ' do desporto ' . $userDesporto->desporto_id);
        return redirect()->route('presenca.show')->with('message', 'A presença do aluno ' . $userDesporto->user_id = Auth::user()->name .' foi editado para '. $userDesporto->num_inscricoes . '/' . $userDesporto->num_presencas);
    }

    public function increment(UserDesporto $userDesporto, $id)
    {
        $inc = UserDesporto::find($id);
        $inc->num_presencas;
        $inc->increment('num_presencas');
        $inc->save();
        Log::channel('main')->notice('ID ' . Auth::user()->id . ' marcou presença ao aluno ' . $userDesporto->user_id = Auth::user()->id);
        return redirect()->route('presenca.show')->with('message', 'A presença do aluno ' . $userDesporto->user_id = Auth::user()->name . ' foi marcada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDesporto $userDesporto)
    {
        $userDesporto->delete();
        Log::channel('main')->alert('ID ' . Auth::user()->id . ' eliminou a inscrição ' . $userDesporto->id . ' com ' . $userDesporto->num_inscricoes . '/' . $userDesporto->num_presencas . ' de presenças');
        return redirect()->route('presenca.show')->with('message', 'A inscrição do aluno ' . $userDesporto->user_id = Auth::user()->name . ' foi eliminada, com o número da inscrição ' . $userDesporto->id . '!');
    }
}
