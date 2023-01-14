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

        $faqs = faqs::paginate(1);

        return view ('adminPage.faqs')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new faqs;
        return view('adminPage.faqs.create')->with('faq', $faq);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqsRequest  $request)
    {
        $fields=$request->validated();
        $faq=new faqs();
        $faq->fill($fields);
        $faq->save();
        return redirect()->route('admin.faqs.index')->with('success', 'Categoria criada com sucesso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(faqs $faq)
    {
        return view('adminPage.faqs.show')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(faqs $faq)
    {
        return view('adminPage.faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqsRequest $request, faqs $faq)
    {
        $fields=$request->validated();
        $faq->fill($fields);
        $faq->save();
        return redirect()->route('admin.faqs.index')->with('success','Categoria atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs $faq)
    {
            $faq->delete();
            return redirect()->route('admin.faqs.index')->with('success',
            'Faq eliminada com sucesso');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $faqs = faqs::table('faqs')
                ->where('id', 'like', '%'.$search_text.'%')
                ->orWhere('pergunta', 'like', '%'.$search_text.'%')
                ->orWhere('resposta', 'like', '%'.$search_text.'%')
                ->get();

        return view('adminPage.faqs.search', compact('$faqs'));
    }
}
