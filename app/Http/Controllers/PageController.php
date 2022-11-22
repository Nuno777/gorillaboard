<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

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
        return view('faqs');
    }

    public function contactos(){
        return view('contactos');
    }

}
