<?php

namespace App\Http\Controllers;

use App\Message;

class HomeController extends Controller {

    public function index() {
        $messages = Message::all()->sortBy('created_at');
        return view('index')->with('messages', $messages);
    }

}
