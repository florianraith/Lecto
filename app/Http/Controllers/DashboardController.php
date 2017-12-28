<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $messages = Message::all()->where('user_id', Auth::user()->id)->sortBy('created_at');
        return view('dashboard')->with('messages', $messages);
    }
}
