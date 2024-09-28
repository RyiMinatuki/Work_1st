<?php

namespace App\Http\Controllers;

class AttendanceController extends Controller
{
    public function index()
    {
        // 勤怠管理ページのテンプレートを表示
        return view('attendance');
    }
}
