<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faqs;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sobre(){
        return view('sobre');
    }

    public function aula(){
        return view('aula');
    }

    public function faqs(){
        $faq = faqs::all();

        return view('faqs')->with('faqResults', $faq);
    }

    public function contactos(){
        return view('contactos');

    }


}
