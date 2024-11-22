<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rotte Parametriche</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Bootstrap icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="style.css">
</head>

<body>
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
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


    {{-- Main Content --}}
    <main class="container-fluid">
        {{-- Hero Section --}}
        <section class="header d-flex align-items-center justify-content-center text-center py-5">
            <h1 class="display-4 text">{{$titolo}}</h1>
        </section>

        {{-- Team Cards --}}
        <section class="team py-5">
            <div class="row wrapper-cards d-flex align-items-center justify-content-center">
                @foreach ($team as $member)
                <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset($member['img']) }}" class="card-img-top img-fluid card-img-aboutUs" alt="{{ $member['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$member['name']}} {{$member['surname']}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $member['role'] }}</h6>
                            <a href="{{route('aboutUs.detail', ['id' => $member['id']])}}" class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                </div>
                @endforeach        
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <h5>Chi Siamo</h5>
                    <p>Siamo un'azienda specializzata nel taglio e incisione laser, creando oggetti personalizzati unici e di alta qualità per ogni esigenza.</p>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <h5>Link Utili</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('homepage') }}" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}" class="text-light text-decoration-none">Chi Siamo</a></li>
                        <li><a href="{{ route('servizi') }}" class="text-light text-decoration-none">Servizi</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <h5>Contattaci</h5>
                    <p>
                        <strong>Indirizzo:</strong> Via Esempio, 123, Roma, Italia<br>
                        <strong>Email:</strong> <a href="mailto:info@azienda.com" class="text-light text-decoration-none">info@azienda.com</a><br>
                        <strong>Telefono:</strong> <a href="tel:+390123456789" class="text-light text-decoration-none">+39 012 345 6789</a>
                    </p>
                    <div>
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">© {{ date('Y') }} Nome Azienda. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
