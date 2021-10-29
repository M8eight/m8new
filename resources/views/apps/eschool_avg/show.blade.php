@extends('layouts.master')

@section('title', 'Главная')

@section('content')

<h2 class="text-center my-3">Средний бал триместра</h2>

<div class="container-fluid">
    <div class="row">

        <div class="col-6">
            <span class="fs-2">
                Средний бал всех предметов
                <span class="{{ 
                    $track['class']
                }}">
                    {{ $average }}</span>
            </span>
            <div class="fs-3 text-center">
                {{ $track['description'] }}
            </div>
            <hr>
            <div class="mt-3">
                <span class="fs-4">Самые ужасные оценки по:</span>
                @foreach($massAll as $key => $value)
                @if(substr($value, 0, 1) == $track['key'])
                <div class="card mt-3 shadow-sm bg-body rounded">
                    <div class="card-body">
                        • {{ $key }} = {{ $value }}
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="col-6">
            @foreach($massAll as $key => $value)
            <div class="card mb-2">
                <div class="card-body">
                    • {{ $key }} = {{ $value }}
                </div>
            </div>
            @endforeach
        </div>

        </div>

    </div>
</div>

<br>

@endsection
