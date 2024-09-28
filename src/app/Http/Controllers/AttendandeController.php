<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        // 勤怠管理のテンプレートを表示
        return view('attendance'); // 'attendance' は attendance.blade.php に対応
    }
}
