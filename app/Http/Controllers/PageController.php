<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faqs;
use App\Models\User;
use App\Models\Desporto;
use App\Models\Aula;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function index(){
        $desportos = Desporto::all();
        $aulas = Aula::all();
        return view('index', compact('desportos', 'aulas'));
    }

    public function sobre(){
        return view('sobre');
    }

    public function aula(Desporto $desporto){
        $aulas = Aula::all();
        $desportos = Desporto::all();
        return view('aula', compact('aulas','desportos', 'desporto'));
    }

    public function faqs(){
        $faqs = faqs::all();

        return view ('faqs')->with('faqs', $faqs);
    }

    public function contactos(){
        return view('contactos');

    }
    public function dashboard(){
        $countUsers = User::count();


        return view('dashboard')->with('countUsers', $countUsers);
    }
}
