<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobre_texto;
use App\Models\faqs;
use App\Models\User;
use App\Models\Desporto;
use App\Models\Aula;
use App\Models\sobre;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function index(){
        $desportos = Desporto::all();
        $aulas = Aula::orderBy('data_aulas', 'DESC')->take(5)->get();
        return view('index', compact('desportos', 'aulas'));
    }

    public function sobre(){
        $sobre = sobre::where('featured', '1')->get();
        $users = User::where('admin', '1')->get();
        $texto_sobre = Sobre_texto::all();

        return view ('sobre')->with('sobre', $sobre)->with('users', $users)->with('sobre_texto', $texto_sobre);

    }

    public function aula(Desporto $desporto){
        $aulas = Aula::all();
        $desportos = Desporto::all();
        return view('aula', compact('aulas','desportos', 'desporto'));
    }

    public function faqs(){
        $faqs = faqs::paginate(2);

        return view ('faqs')->with('faqs', $faqs);
    }

    public function contactos(){
        return view('contactos');

    }
    public function dashboard(){
        $userCount = User::all()->count();

        return view('dashboard')->with('userCount', $userCount);
    }
    public function desportos(){
        return view('desportos');

    }

    public function logs() {
        $logCollection = file(storage_path().'/logs/main.log');
        return view('adminPage.log', compact('logCollection'));
    }
}
