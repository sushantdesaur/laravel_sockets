<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    //Constructor function so that authenticated user can go to chats route
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('chats');
    }
    
    // Fetching messages
    public function fetchMessages() {
        return Message::with('user')->get();
    }

    // Sending messages
    public function sendMessage(Request $request) {
        $message = auth()->user()->messages()->create([
            'message' => $request->message,
        ]);

        broadcast(new MessageSent($message));

        return ['status'=> 'success'];
    }
}
