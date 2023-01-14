<?php

namespace App\Http\Controllers;

use App\Models\DesportoImage;
use Illuminate\Http\Request;

class desportos_ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $desportos_img = DesportoImage::all();
        return view('adminPage.admin_Img', compact('desportos_img'));
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
        if ($request->hasFile('image')) {
            $img_path = $request->file( 'image' )->storeAs('public/galeria', $request->image_name . "." . $request->file( 'image' )->getClientOriginalExtension() );
            
            $desportos_img = new DesportoImage();
            $desportos_img->image = basename($img_path);
            $desportos_img->desporto_id = 1;
            $desportos_img->save();

            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verimagemxpto()
    {
        //
    }
}