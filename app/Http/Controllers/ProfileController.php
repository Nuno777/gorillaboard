<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('profile.home');
    }

    public function show(Request $request)
    {
        return view('profile.home');
    }


    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit');
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.index', $request->user())->with('success', 'profile-updated');
    }


    /**
     * Update the user's img Profile.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateimg(Request $request)
    {
        // Validate the request and the uploaded file
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Delete the old profile image (if there is one)
        if ($user->img) {
            Storage::delete('img/profile/' . $user->img);
        }

        // Store the new profile image and update the user's image attribute
        $path = $request->file('img')->store('img/profile', 'public');
        $user->img = $path;


        $user->save();
        /* $user->save(); */

        // Redirect the user back to their profile page
        return Redirect::route('profile.index', $request->user())->with('success', 'profile-updated');

    }





    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    // define paginas de ações do perfil

    public function changeImg(){
        return view('profile.partials.update-img-user');
    }

    public function changeEmail(){
        return view('profile.partials.update-email');
    }

    public function changePassword(){
        return view('profile.partials.update-password');
    }
    public function addAtleta(){
        $users = User::all();
        return view('profile.add-atleta')>with('users', $users);
    }

    public function deleteAccount(){
        return view('profile.partials.delete-account');
    }
}
