<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    //Constructor function so that authenticated user can go to chats route
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('chats');
    }
}
