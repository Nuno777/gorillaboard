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
        $sobre = sobre::all();
        return view('adminPage.sobre.index', compact('sobre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.sobre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "texto" => 'nullable',
            "img" => 'required',
            "featured" => 'required',
        ]);

        $img = $request->img;
        $sobre = new sobre();
        if ($img) {
            $image_name = $img->getClientOriginalName();
            $img->move(public_path('img'), $image_name);
            $sobre->img = $image_name;
        }
        $sobre->texto = $request->texto;
        $sobre->featured = $request->featured;

        $sobre->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('adminPage.sobre.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function edit(sobre $sobre)
    {
        //return $sobre;
        return view('adminPage.sobre.edit', compact('sobre'));
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
        $this->validate($request, [
            "texto" => 'nullable',
            "img" => 'required',
            "featured" => 'required',
        ]);

        $img = $request->img;

        if ($img) {
            $image_name = $img->getClientOriginalName();
            $img->move(public_path('img'), $image_name);
            $sobre->img = $image_name;
        }
        $sobre->texto = $request->texto;
        $sobre->featured = $request->featured;

        $sobre->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(sobre $sobre)
    {
        $sobre->delete();
        return back();
    }
}
