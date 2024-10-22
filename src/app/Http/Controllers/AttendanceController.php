<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function show($date)
    {
        // 日付をCarbonで扱う
        $currentDate = Carbon::parse($date);
        $prevDate = $currentDate->copy()->subDay()->toDateString();
        $nextDate = $currentDate->copy()->addDay()->toDateString();

        // 勤怠データを取得（サンプルのロジック、実際のデータに合わせる）
        $attendances = Attendance::whereDate('date', $currentDate->toDateString())->paginate(5);

        return view('attendance', compact('attendances', 'currentDate', 'prevDate', 'nextDate'));
    }
}
