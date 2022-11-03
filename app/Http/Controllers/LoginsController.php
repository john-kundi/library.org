<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginsController extends Controller
{
    
        public function logins(request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            if(Auth::user()->role == 'admin'){

                return redirect()->route('admin.login');
            }

            elseif(Auth::user()->role == 'user'){

                return redirect()->route('users.login');
            }

            else{
                return redirect()->back()->with('status','You are unknown. Please get registered first.');
            }
             
        }
    

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
