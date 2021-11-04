<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <h2>Events</h2>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
          </li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="/login">Logar</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/register">Cadastrar</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
              <a class="nav-link" href="/create">Criar Eventos</a>
          </li>
          <li class="nav-item">
            <form action="{{url('/logout')}}" method="POST">
              @csrf
              <a href="/logout" class="nav-link" onclick="event.preventDefault();
              this.closest('form').submit();">
                  Sair
              </a>
            </form>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
