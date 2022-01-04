<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|max:12',
        ]);

        if(Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard.index');
        }

        return back()->withErrors([
            'error' => 'Dados incorretos! Entre em contato com um administrador',
        ]);
    }
}