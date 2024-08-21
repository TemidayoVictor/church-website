<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login', [
            'selected' => 'login',
            'show' => 'none',
        ]);
    }

    public function logUserIn(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('username','password'), $request->remember)) {
            return back()->with('status', 'Invalid username or password');
        }

        else {
            return redirect()->route('addDevotional');
        }
    }
}
