@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
    <div class="attendance-container">
        <div class="attendance-header">
            <a href="{{ route('attendance', ['date' => $prevDate]) }}" class="attendance-nav">&lt;</a>
            <span class="attendance-date">{{ $currentDate }}</span>
            <a href="{{ route('attendance', ['date' => $nextDate]) }}" class="attendance-nav">&gt;</a>
        </div>

        <table class="attendance-table">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->start_time }}</td>
                    <td>{{ $attendance->end_time }}</td>
                    <td>{{ $attendance->break_time }}</td>
                    <td>{{ $attendance->work_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $attendances->links() }}
        </div>
    </div>
@endsection
