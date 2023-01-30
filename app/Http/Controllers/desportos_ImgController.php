<?php

namespace App\Http\Controllers;

use App\Models\Desporto;
use App\Models\DesportoImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class desportos_ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->q))
            $desportos = Desporto::whereHas('images', function($q) use ($request) {
                $q->where('image', 'LIKE', '%' . $request->q . '%');
            })->get();
        else
            $desportos = Desporto::all();

        return view('adminPage.admin_Img', compact('desportos'));
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
            $desportos_img->desporto_id = $request->desp_img;
            $desportos_img->save();

            return redirect('admin/Img_Dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DesportoImage  $desportos_img
     * @return \Illuminate\Http\Response
     */
    public function show(DesportoImage $desportos_img)
    {
        return view('adminPage.DesportoImage.show')->with('desportos_img', $desportos_img);
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
    public function destroy(DesportoImage $Img_Dashboard)
    {
        $Img_Dashboard->delete();
        Storage::delete('public/galeria/' . $Img_Dashboard->image);
        return redirect()->route('admin.Img_Dashboard.index');
    }

    public function verimagemxpto()
    {
        //
    }
}