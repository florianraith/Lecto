<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller {

    /**
     * MessageController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        session()->flash('status', trans('profile.created'));
        return redirect()->route('profile');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request) {
        $data = $request->validate([
           'message_id' => 'required|integer'
        ]);

        Message::destroy(intval($data['message_id']));

        session()->flash('status', trans('profile.deleted'));
        return redirect()->route('profile');
    }

}
