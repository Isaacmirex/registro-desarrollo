<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('admin.home', [
            'eventos' => $eventos
        ]);
        // return view('admin.home');
    }
}
