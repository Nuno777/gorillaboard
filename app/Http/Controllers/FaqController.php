<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFaqsRequest;
use App\Http\Requests\StoreFaqsRequest;
use App\Models\faqs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faqs = faqs::all();

        return view('adminPage.faqs')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs = new faqs;
        return view('adminPage.faqs.create')->with('faqs', $faqs);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqsRequest  $request)
    {
        $fields=$request->validate();
        $faq=new faqs();
        $faq->fill($fields);
        $faq->save();
        return redirect()->route('adminPage.faqs')->with('success', 'Categoria criada com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(faqs $faqs)
    {
        return view('adminPage.faqs.show')->with('faqs', $faqs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(faqs $faqs)
    {
        return view('adminPage.faqs.edit')->with('faqs', $faqs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqsRequest $request, faqs $faqs)
    {
        $fields=$request->validated();
        $faqs->fill($fields);
        $faqs->save();
        return redirect()->route('adminPage.faqs')->with('success','Categoria atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs $faqs)
    {
        if ($faqs->projects()->exists()){
            return redirect()->route('admin.categories.index')->withErrors(
            ['delete'=>'A categoria que tentou eliminar tem projetos
            associados'] );
            }
            $faqs->delete();
            return redirect()->route('admin.categories.index')->with('success',
            'Categoria eliminada com sucesso');
    }
}
