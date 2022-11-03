<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function signupform()
    {
        return view('signup');
    }

    public function registeruser(request $request)
    {
        $this->validate($request,[
                 'fname' => 'required|string',
                 'lname' => 'required|string',
                 'email' => 'required|string',
                 'password' => 'required|string'
        ]);

        $user = new User;
        $user->name = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('status','Congrats, registration is successful.');
    }
}
