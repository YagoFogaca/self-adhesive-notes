<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.create-account.index');
    }

    public function createAccount(Request $req)
    {
        try {
            $userValidated = $req->validate([
                'username' => 'required|min:4',
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);
            User::create($userValidated);
            redirect('login')->with('success', 'Conta criada com sucesso');
        } catch (Exception $error) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao criar o usaurio');
        }
    }
}
