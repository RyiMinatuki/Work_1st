@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
    <div class="date-select">
        <div class="date-select__buttons">
            <a href="" class="date-select__buttons-left">&lt;</a>
            <a href="" class="date-select__buttons-right">&gt;</a>
        </div>

        <h1 class="date">
            2024/09/28
        </h1>
    </div>
@endsection