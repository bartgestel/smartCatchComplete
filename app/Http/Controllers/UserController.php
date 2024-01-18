<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //function to for login
    public function login(Request $request)
    {
        //check if a user is already logged in
        if (auth()->check()) {
            return redirect('/');
        } else {
            //validates the form input
            $incomingFields = $request->validate([
                'Username' => ['required'],
                'Password' => ['required']
            ]);
            //attempt to log user in
            if (auth()->attempt(['name' => $incomingFields['Username'], 'password' => $incomingFields['Password']])) {
                $request->session()->regenerate();
                return redirect('/dashboard');
            } else {
                return back()->withErrors([
                    'email' => 'Incorrect username or password.',
                ]);
            }
        }
    }

    //function for logout
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
