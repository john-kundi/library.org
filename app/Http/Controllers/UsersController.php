<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    
    public function login()
    {
        return view('contents.user.home');
    }
}
