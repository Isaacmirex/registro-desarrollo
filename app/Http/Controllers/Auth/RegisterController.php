<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        // dd($request);
        $user = Usuario::create(request(['nombres', 'apellidos', 'correo', 'password']));

        auth()->login($user);
        return redirect()->to('/home');
    }
}
