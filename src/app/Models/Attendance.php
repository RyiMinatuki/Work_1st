<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // 必要に応じて、テーブル名やフィールドを指定する
    protected $table = 'attendance';

    // 取得するカラムを指定
    protected $fillable = ['user_id', 'date', 'start_time', 'end_time', 'break_time', 'work_time'];
}