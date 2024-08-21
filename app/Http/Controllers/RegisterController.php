<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('admin.addAdmin');
    }

    public function addAdmin(Request $request) {
        $this->validate($request, [
            'username' => 'unique:users,username|required|max:255',
            'password' => 'confirmed|required',
        ]);

        User::create([
            'name' => 'Purpose Driven Church',
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->username.'@gmail.com',
        ]);

        return redirect()->route('addAdmin')->with('status', 'Admin User added Successfully');
    }
}
