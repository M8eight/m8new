  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container-fluid">
          <i><a class="navbar-brand logo-master" style="font-family: 'ZCOOL QingKe HuangYou', cursive; font-size: 1.7em;" href="{{ route('index') }}">MSPS</a></i>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link @routeActive('index')" aria-current="page" href="{{ route('index') }}">Главная</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @routeActive('links')" href="{{ route('links') }}">Ссылки</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @routeActive('faq')" href="{{ route('faq') }}">Помощь</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
