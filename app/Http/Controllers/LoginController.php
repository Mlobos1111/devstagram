<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest as Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

   
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        return redirect()->route('posts.index');
    }
}
