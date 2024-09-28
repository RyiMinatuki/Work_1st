<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // ホームページのテンプレートを表示
        return view('index');
    }
}
