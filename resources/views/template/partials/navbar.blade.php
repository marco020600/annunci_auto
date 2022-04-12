<nav class="navbar navbar-expand-lg bg-white navbar-light fw-normal border-bottom fs-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Annunci</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/register">Registrati</a>
          </li>
          @endguest

          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/inserisci/annuncio">Inserisci un annuncio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/miei/annunci">I miei annunci</a>
          </li>

          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();" class="nav-link">
               Logout
              </a>
          </form>
      </li>
          @endauth
        
          
        </ul>
      </div>
    </div>
  </nav>