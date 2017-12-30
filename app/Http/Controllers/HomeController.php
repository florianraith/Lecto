<?php

namespace App\Http\Controllers;

use App\Message;

class HomeController extends Controller {

    public function index() {
            $messages = Message::orderBy('created_at', 'desc')->paginate(6);
        return view('index')->with('messages', $messages);
    }

}
