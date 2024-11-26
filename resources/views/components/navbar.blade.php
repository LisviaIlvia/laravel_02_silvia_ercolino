  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{route('homepage')}}">LaserLab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active active-custom"
                    {{-- sfrutto il costrutto per accedere alla rotta corrente per impostare la classe 'active' al link home solo se ci si trova nella pagina la cui rotta si chiama 'homepage' --}}
                    {{-- @if(Route::currentRouteName() == 'homepage') active active-custom @endif --}}
                      aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutUs')}}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
