@extends('layouts.master')

@section('title', 'Главная')

@section('content')

  <div class="container margins">
    <h2>&#8595; Все страницы &#8595;</h2>

    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Таймер до каникул
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Тыкни на кнопку и узнаешь сколько осталось до каникул
            <a class="btn btn-warning margins_a" href="{{ route('apps-timer') }}" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Заметки
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Можно написать что хотите и оно появится на сайте
            <a class="btn btn-warning margins_a" href="applications/coment.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Список музыки
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Откроется небольшой парсер который преобразует json файл в список музыки
            <a class="btn btn-warning margins_a" href="applications/music.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Парсер Анекдотов
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Это короче приложение которое ворует анекдоты с сайта и пихает суда
            <a class="btn btn-warning margins_a" href="applications/parser.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Все трюки в пенспиниге
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">При нажатии откроется огромный список с трюками
            <span style="color: maroon;">осторожно, долгая загрузка</span> <a class="btn btn-danger margins_a"
              href="applications/penspining_trick.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
            Дети парсер с ними
          </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Вот статья о там как это <a
              href="https://vk.com/m8eight-chto-takoe-parser-ili-kak-vorovat-kartinki-k-sebe">сделать</a>
            <a class="btn btn-warning margins_a" href="applications/deti.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
            Гдз автосрак
          </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Тут удобнее пользоватся гдз сразу появляется изображение и ссылка
            <a class="btn btn-warning margins_a" href="applications/gdz.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

      <div class="accordion-item shadow bg-white rounded">
        <h2 class="accordion-header" id="flush-headingEight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
            Гдз автосрак  
          </button>
        </h2>
        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Тут удобнее пользоватся гдз сразу появляется изображение и ссылка
            <a class="btn btn-warning margins_a" href="applications/gdz.php" role="button">Открыть</a>
          </div>
        </div>
      </div>

@endsection
