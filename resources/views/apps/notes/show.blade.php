@extends('layouts.master')

@section('title', 'Заметки')

@section('content')

<div class="container">
    <h2 class="text-center">Заметки</h2>
</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($db as $note)
        @include('apps.notes.card')
        @endforeach
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Добавить заметку</button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Добавить заметку</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('apps-note-add') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="header" class="form-label">Заголовок заметки</label>
                            <input type="text" placeholder="Ваш заголовок" class="form-control" name="header" id="header" aria-describedby="header">
                        </div>
                            <label for="text" class="form-label">Основной текст</label>
                        <textarea class="form-control" name="main" id="main" placeholder="Ваш текст"></textarea> <br>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>

                </div>
            </div>



        </div>
        <div class="col"></div>
    </div>

</div>



@endsection
