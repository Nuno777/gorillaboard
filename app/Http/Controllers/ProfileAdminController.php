<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileAdminController extends Controller
{
    public function show(Request $request)
    {
        return view('adminPage.profile.user-profile-admin', [
            'user' => $request->user(),
        ]);
    }

    public function edit(Request $request)
    {

        return view('adminPage.profile.user-profile-admin-update', [
            'user' => $request->user(),
        ]);
    }

    /*  public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    } */
}
