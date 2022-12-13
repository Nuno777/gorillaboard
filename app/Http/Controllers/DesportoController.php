<?php

namespace App\Http\Controllers;

use App\Models\Desporto;
use Illuminate\Http\Request;

class DesportoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desportos = Desporto::all();

        return view ('index')->with('desportos', $desportos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function show(Desporto $desporto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function edit(Desporto $desporto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desporto $desporto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desporto $desporto)
    {
        //
    }
}
