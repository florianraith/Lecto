<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    /**
     * @param $user_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($user_id) {

        $user = null;

        if(is_numeric($user_id)) {
            $user = User::findOrFail($user_id);
        } else {
            $user = User::where('name', $user_id)->firstOrFail();
        }

        $messages = Message::all()->where('user_id', $user->id)->sortByDesc('created_at');

        return view('profile.show')->with('messages', $messages)->with('user', $user);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profile(Request $request) {
        $request->session()->reflash();
        if(Auth::check()) {
            return redirect()->action('ProfileController@show', Auth::user()->name);
        } else {
            return redirect()->route('login');
        }
    }

}
