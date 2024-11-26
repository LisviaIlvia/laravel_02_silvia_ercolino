

<div class="card shadow-sm h-100">
    <img src="{{ asset($serviceImg) }}" class="card-img-top img-fluid" alt="{{ $serviceTitle }}">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $serviceTitle }}</h5>
        <p class="card-text">{{ $serviceDescription }}</p>
        <a href="{{ route('service.detail', ['id' => $serviceId]) }}" class="btn btn-primary">Scopri di più</a>
    </div>
</div>

