<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <h2>Events</h2>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/create">Criar Eventos</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/logout') }}"  class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa fa-power-off"></i>
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              <input type="submit" value="logout" style="display: none;">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
