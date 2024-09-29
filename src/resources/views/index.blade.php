@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
    <div class="attendance-container">
        <h1>さんお疲れ様です！</h1>
        <div class="attendance-grid">
            <form action="" method="POST">
                @csrf
                <button type="submit" class="attendance-button">勤務開始</button>
            </form>
            <form action="" method="POST">
                @csrf
                <button type="submit" class="attendance-button">勤務終了</button>
            </form>
            <form action="" method="POST">
                @csrf
                <button type="submit" class="attendance-button">休憩開始</button>
            </form>
            <form action="" method="POST">
                @csrf
                <button type="submit" class="attendance-button">休憩終了</button>
            </form>
        </div>
    </div>
@endsection
