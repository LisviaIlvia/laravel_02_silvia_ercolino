<x-layout>

    {{-- Hero Section --}}
    <header class="hero-section text-center py-5">
        <div class="container">
            <h1 class="display-4 text">{{$service['title']}}</h1>
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
                                    <h4 class="text-carosel">{{ $product['title'] }}</h5>
                                    <p class="text-carosel" >{{ $product['description'] }}</p>
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
                <h2 class="text-center mb-4 text">Contattaci per maggiori informazioni</h2>

                {{-- Form --}}
                <form action="#">
                    {{-- Nome --}}
                    <div class="mb-3">
                        <label for="name" class="form-label text">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label text">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    {{-- Messaggio --}}
                    <div class="mb-3">
                        <label for="message" class="form-label text">Messaggio</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    {{-- Selezione del prodotto (opzionale) --}}
                    <div class="mb-3">
                        <label for="product" class="form-label text">Prodotto di Interesse</label>
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

</x-layout>
