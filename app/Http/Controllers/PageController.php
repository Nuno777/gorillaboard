<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faqs;
use App\Models\User;
use App\Models\Desporto;

class PageController extends Controller
{
    public function index(){
        $desportos = Desporto::all();
        return view('index', compact('desportos'));
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
    public function dashboard(){
        $countUsers = User::count();


        return view('dashboard')->with('countUsers', $countUsers);
    }
}
