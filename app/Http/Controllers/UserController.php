<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view('adminPage.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $this->validate($request, [
            "name" => 'required',
            "email" => 'required',
            "img" => '',
            "admin" => 'required',
            "number_phone" => '',
            "salutation" => ''
        ]);

        $img = $request->img;
        $user = new user();
        if ($img) {
            $image_name = $img->getClientOriginalName();
            $img->move(public_path('img'), $image_name);
            $user->img = $image_name;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->admin = $request->admin;

        $user->save();
        return redirect()->route('admin.user.index')->with('success','User Criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('adminPage.user.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //return $sobre;
        return view('adminPage.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $this->validate($request, [
            "name" => 'required',
            "email" => 'required',
            "img" => '',
            "admin" => 'required',
            "number_phone" => '',
            "salutation" => ''
        ]);

        $img = $request->img;
        if ($img) {
            $image_name = $img->getClientOriginalName();
            Storage::putFileAs('public/',$img ,$image_name);
            /* $img->move(public_path('img'), $image_name); */
            $user->img = $image_name;
        }
        $user->salutation = $request->salutation;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->admin = $request->admin;
        $user->number_phone = $request->number_phone;
        $user->save();
        return redirect()->route('admin.user.index')->with('success','User atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success','User Eliminado com sucesso. ');
    }
}
