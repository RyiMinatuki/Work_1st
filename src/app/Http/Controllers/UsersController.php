<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }
}
