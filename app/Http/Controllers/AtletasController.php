<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAtletasRequest;
use App\Http\Requests\StoreAtletasRequest;
use Illuminate\Http\Request;
use App\Models\atletas;
use App\Models\User;
use App\Http\Controllers\Controller;

class AtletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $atletas = atletas::paginate(10);

        return view ('adminPage.atletas')->with('atletas', $atletas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atleta = new atletas;
        $users = User::all();
        return view('adminPage.atletas.create')->with('atleta', $atleta)->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $fields=$request->all();
        $atleta=new atletas();
        $atleta->fill($fields);

        $atleta->save();

         return redirect()->route('admin.atletas.index')->with('success', 'Atleta criado com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function show(atletas $atleta)
    {
        return view('adminPage.atletas.show')->with('atleta', $atleta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function edit(atletas $atleta)
    {
        $users = User::all();
        return view('adminPage.atletas.edit')->with('atleta', $atleta)->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, atletas $atleta)
    {
        $fields=$request->all();
        $atleta->fill($fields);
        $atleta->save();
        return redirect()->route('admin.atletas.index')->with('success','atleta atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\atletas  $atletas
     * @return \Illuminate\Http\Response
     */
    public function destroy(atletas $atleta)
    {

            $atleta->delete();
            return redirect()->route('admin.atletas.index')->with('success',
            'Atleta eliminado com sucesso');
    }
}
