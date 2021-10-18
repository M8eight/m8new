@extends('layouts.master')

@section('title', 'Главная')
@section('content')

<h2 class="text-center">Картинки детей с сайтика</h5>

    <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-4 g-1">

            @foreach($mass as $key => $src)
            @include('apps.child.card')
            @endforeach

        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
                <nav>
                    <ul class="pagination pagination-lg">
                        <li class="page-item  @pageActive(1) ">
                            <a class=" page-link" href="{{ route('apps-child-show', 1) }}">1</a>
                        </li>
                        <li class="page-item @pageActive(2)">
                            <a class=" page-link" href="{{ route('apps-child-show', 2) }}">2</a>
                        </li>
                        <li class="page-item @pageActive(3)">
                            <a class=" page-link" href="{{ route('apps-child-show', 3) }}">3</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    @endsection
