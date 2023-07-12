<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.create-account.index');
    }

    public function createAccount(Request $req)
    {
        try {
            $req->validate([
                'username' => 'required|min:4',
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            $user = [
                'username' => $req->input('username'),
                'email' => $req->input('email'),
                'password' => Hash::make($req->input('password')),
            ];

            User::create($user);
            return redirect()->route('login')->with('success', 'Conta criada com sucesso');
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['error', 'Ocorreu um erro ao criar o usaurio']);
        }
    }

    public function login()
    {
        return view('pages.login.index');
    }

    public function store(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $user = $req->only('email', 'password');

        $auth = Auth::attempt($user);
        if (!$auth) {
            return redirect()->route('login')->withErrors(['errorAuth' => 'Email ou senha inválidos']);
        }

        return redirect()->route('app');
    }
}
