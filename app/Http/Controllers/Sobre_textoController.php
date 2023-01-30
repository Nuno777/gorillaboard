<?php

namespace App\Http\Controllers;

use App\Models\Sobre_texto;
use Illuminate\Http\Request;

class Sobre_textoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sobre_textos = Sobre_texto::all();
 
        return view('adminPage.sobre.edit_texto', compact('sobre_textos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sobre_texto = sobre_textos::findOrFail($id);
        return view('adminPage.sobre.index', compact('sobre_texto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields
        $request->validate([
            'stock_name'=>'required',
        ]); 
        $sobre_text = Sobre_texto::findOrFail($id);
        // Getting values from the blade template form
        $sobre_text->texto =  $request->get('stock_name');
        $sobre_text->save();
    
        return redirect()->route('admin.sobre_texto.index')->with('success','Categoria atualizada com sucesso');

    }

}
