@extends('layouts.master')

@section('title', 'Главная')
@section('alt-code')

<style type="text/css">
    .rainbow-animated {
        background: linear-gradient(to right, red, orange, yellow, green, cyan, blue, violet);
        background-size: 400% 400%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-animation: rainbow 20s ease infinite;
        animation: rainbow 20s ease infinite;
        text-align: center;
    }

    @-webkit-keyframes rainbow {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

    @keyframes rainbow {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

</style>
@endsection

@section('content')
<div class="container margins" style="text-align: center;">

    <h2 class="rainbow-animated">До каникул осталось!</h2>
    <hr>

    <h3 style="font-size: 4em;">
        {{-- {{ dd($returnDate) }} --}}


        {{ $returnDate['month'].' '.$sayMonth }} <br>
        {{ $returnDate['day'].' '.$sayDay }} <br>
        {{ $returnDate['hour'].' '.$sayHour }}
    </h3>
    <hr>

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">В дополнение</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">*Примечание</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            Отсчет идет до 25 мая 00:00
        </div>
    </div>
</div>

@endsection
