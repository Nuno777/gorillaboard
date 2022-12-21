<?php

namespace App\Http\Controllers;

use App\Models\sobre;
use App\Models\User;
use Illuminate\Http\Request;

class sobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sobre = sobre::where('featured', '1')->get();
        $users = User::where('admin', '0')->get();

        return view ('sobre')->with('sobre', $sobre)->with('users', $users);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function show(sobre $sobre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function edit(sobre $sobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sobre $sobre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(sobre $sobre)
    {
        //
    }
}
