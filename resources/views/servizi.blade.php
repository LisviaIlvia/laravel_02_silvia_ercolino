<x-layout>
    {{-- Hero Section --}}
    <header class="hero-section text-center py-5">
        <div class="container">
            <h1 class="display-4 text">{{ $titolo }}</h1>
        </div>
    </header>

    {{-- Services Section --}}
    <main class="container py-5">
        <div class="row justify-content-center">
            @foreach ($servizi as $service)
                <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                    <x-cardServizi
                        serviceTitle="{{ $service['title'] }}"
                        serviceDescription="{{ $service['description'] }}"
                        serviceId="{{ $service['id'] }}"
                        serviceImg="{{ $service['img'] }}">
                    </x-cardServizi>
                </div>
            @endforeach
        </div>
    </main>
</x-layout>
