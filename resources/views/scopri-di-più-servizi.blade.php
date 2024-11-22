<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rotte Parametriche</title>
    {{-- Bootsrap CSS --}}
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
 
    {{-- Hero Section --}}
    <header class="hero-section text-center py-5">
        <div class="container">
            <h1 class="display-4">{{$service['title']}}</h1>
        </div>
    </header>

    {{-- Carosello --}}
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-8 w-75 d-flex align-items-center justify-content-center">
                <div id="carouselExampleCaptions" class="carousel slide w-100">
                    <div class="carousel-indicators">
                        @foreach ($service['products'] as $key => $product)
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($service['products'] as $key => $product)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($product['img']) }}" class="carousel-image d-block w-100" style="height: 600px; object-fit: cover; width: 50%;"  alt="{{ $product['title'] }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $product['title'] }}</h5>
                                    <p>{{ $product['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Form di Contatto --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Contattaci per maggiori informazioni</h2>

                {{-- Form --}}
                <form action="#">
                    {{-- Nome --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    {{-- Messaggio --}}
                    <div class="mb-3">
                        <label for="message" class="form-label">Messaggio</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    {{-- Selezione del prodotto (opzionale) --}}
                    <div class="mb-3">
                        <label for="product" class="form-label">Prodotto di Interesse</label>
                        <select class="form-select" id="product" name="product">
                            <option value="" disabled selected>Seleziona un prodotto</option>
                            @foreach ($service['products'] as $product)
                                <option value="{{ $product['id'] }}">{{ $product['title'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Pulsante di invio --}}
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-light py-4 mt-5">
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
</body>
{{-- Bootsrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
