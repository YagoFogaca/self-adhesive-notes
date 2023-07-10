<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.create-account.index');
    }

    public function createAccount(Request $req)
    {
        $token = $req->session()->token();

        $token = csrf_token();
        print_r($token);
        echo '<br>';
        dd($req->all());
    }
}
