@extends('layouts.master')

@section('title', 'Гдз помошник')
@section('content')

    @if(session()->has('danger'))
    <div class="alert alert-danger d-flex justify-content-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" /></svg>
        <div>
            Такого номера/параграфа нету
        </div>
    </div>
    @endif

    <div class="container-fluid text-center mb-3">

        <h1 class="mb-2">Гдз автосрак</h1>
        <form enctype="multipart/form-data" method="POST" class="mb-2" name="gdz" action="{{ route('apps-gdz_helper-post') }}">
            @csrf
            <select class="mb-2" name="book">
                <option value="eng9">Английский 9 класс</option>
                <option value="alg9">Алгебра 9 класс</option>
                <option value="his9">История 9 класс</option>
                <option value="obs9">Обществознание 9 класс</option> 
            </select>
            <br>
            <input class="mb-2" type="text" name="number" placeholder="Введите номер/страницу">
            <br>
            <input type="submit" value="Отправить">
        </form>
        <p>Выбираете предмет пишете номер в ответ получаете сразу изображения</p>

        @if($imageMass != null)
        <div class="container-fluid">
            <div class="row row-cols-2 row-cols-md-1 g-1">

                @foreach($imageMass as $key => $href)
                @include('apps.gdz_helper.card')
                @endforeach

            </div>
        </div>
        @endif

    </div>

    @endsection
