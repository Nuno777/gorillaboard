<?php

namespace App\Http\Controllers;

use App\Models\desportos;
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
        $desportos = desportos::all();

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
    public function show(desportos $desportos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function edit(desportos $desportos)
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
    public function update(Request $request, desportos $desportos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desportos  $desportos
     * @return \Illuminate\Http\Response
     */
    public function destroy(desportos $desportos)
    {
        //
    }
}
