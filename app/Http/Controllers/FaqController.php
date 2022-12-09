<?php

namespace App\Http\Controllers;

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
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(faqs $faqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(faqs $faqs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faqs $faqs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs $faqs)
    {
        //
    }
}
