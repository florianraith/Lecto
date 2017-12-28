<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function post(Request $request) {
        $data = $request->validate([
            'message' => 'required|string|max:255',
            'color_id' => 'integer|required'
        ]);

        $message = new Message;
        $message->message = $data['message'];
        $message->color_id = $data['color_id'];
        $message->user_id = Auth::user()->id;
        $message->save();

        return redirect()->route('profile');
    }

    public function delete(Request $request) {
        $data = $request->validate([
           'message_id' => 'required|integer'
        ]);

        Message::destroy(intval($data['message_id']));

        return redirect('/dashboard');
    }

}
