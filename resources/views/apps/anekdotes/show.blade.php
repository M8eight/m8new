@extends('layouts.master')

@section('title', 'Главная')
@section('content')

<h2 class="text-center">Парсер анекдотов</h5>

<div class="container-fluid">

    <div class="row my-2">
        <div class="col"></div>
        <div class="col d-grid gap-2 col-2 mx-auto">
            <a href="https://www.anekdot.ru/" class="btn btn-secondary">
                Оригинал
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"></path>
                </svg>
            </a>
        </div>
        <div class="col"></div>
    </div>
    


    <div class="row row-cols-2 row-cols-md-1 g-2">

        @foreach($mass as $value)
        @include('apps.anekdotes.card')
        @endforeach

    </div>
</div>

@endsection
