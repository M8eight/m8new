@extends('layouts.master')

@section('title', 'Главная')
@section('content')

<div class="container-fluid">
    <h2 class="text-center my-2">Все трюки в Пенспининге</h2>

    <div class="row row-cols-2 row-cols-md-4 g-4">
        @foreach($psPaginate as $trickVal)
        @include('apps.penspining.card')
        @endforeach
    </div>

    <div class="col d-grid gap-2 col-2 mx-auto my-3">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Оригинал всего списка
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a target="_blank" class="dropdown-item" href="https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_1/4-1-0-25">Первая страница</a></li>
                <li><a target="_blank" class="dropdown-item" href="https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_2/4-1-0-27">Вторая страница</a></li>
            </ul>
        </div>

    </div>

    {{ $psPaginate->links() }}



</div>

<br>


@endsection
