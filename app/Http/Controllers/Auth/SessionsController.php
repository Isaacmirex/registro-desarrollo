<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['correo', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o cotraseña son incorrectos'
            ]);
        } else {

            return redirect()->to('/home');
        }
    }

    public function destroy()
    {

        auth()->logout();

        return redirect()->to('/');
    }
}
