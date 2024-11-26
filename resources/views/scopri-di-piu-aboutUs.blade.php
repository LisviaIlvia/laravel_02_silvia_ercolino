<x-layout>

    {{-- Hero Section --}}
    <header class="hero-section text-center py-5">
        <div class="container">
            <h1 class="display-4 text">{{ $titolo }} {{ $member['name'] }}</h1>
        </div>
    </header>

    

    {{-- Main Content --}}
    <main class="container-fluid vh-100">
        <section class="details py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="{{ asset($member['img']) }}" class="img-fluid rounded shadow-sm" alt="...">
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="mb-2 text">{{ $member['role'] }}</h6>
                    <p class="card-text text">{{ $member['description'] }}</p>
                </div>
            </div>
        </section>
    </main>

</x-layout>
