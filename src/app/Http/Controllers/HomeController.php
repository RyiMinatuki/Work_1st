<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ホームページのテンプレートを表示
        return view('index'); // 'index' は index.blade.php に対応
    }
}
