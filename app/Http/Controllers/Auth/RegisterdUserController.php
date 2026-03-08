<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use function Laravel\Prompts\password;

class RegisterdUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
        //validate the request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', \Illuminate\Validation\Rules\Password::defaults()],
        ]);
        //create the user in the DB
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //log them in
        Auth::login($user);
        //redirect to home
        return redirect('/ideas');

    }
}
