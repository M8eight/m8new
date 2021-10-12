@extends('layouts.master')

@section('title', 'Главная')

@section('content')

<h2 class="text-center my-3">Вот и парсер собственно</h2>

<div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-2">

        @foreach($tracks as $key => $music)

        @include('apps.music.card')

        @endforeach

    </div>
</div>


<br>

@endsection
