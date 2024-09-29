<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceAndBreaksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Attendanceテーブルの作成
        Schema::create('attendance', function (Blueprint $table) {
            $table->id(); // 主キー
            $table->foreignId('user_id')->constrained('users'); // 外部キー（Usersテーブルと関連）
            $table->date('date'); // 勤務日
            $table->time('start_time'); // 勤務開始時間
            $table->time('end_time')->nullable(); // 勤務終了時間（最初はnull）
            $table->timestamps(); // created_at と updated_at
        });

        // Breaksテーブルの作成
        Schema::create('breaks', function (Blueprint $table) {
            $table->id(); // 主キー
            $table->foreignId('attendance_id')->constrained('attendance'); // 外部キー（Attendanceテーブルと関連）
            $table->time('start_time'); // 休憩開始時間
            $table->time('end_time')->nullable(); // 休憩終了時間（最初はnull）
            $table->timestamps(); // created_at と updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // テーブルの削除（ロールバック用）
        Schema::dropIfExists('breaks');
        Schema::dropIfExists('attendance');
    }
}
