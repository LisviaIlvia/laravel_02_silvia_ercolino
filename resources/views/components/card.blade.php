

<div class="card shadow-sm h-100">
    <img src="{{ asset($memberImg) }}" class="card-img-top img-fluid card-img-aboutUs" alt="{{ $memberName }}">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $memberName }} {{ $memberSurname }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $memberRole }}</h6>
        <a href="{{ route('aboutUs.detail', ['id' => $memberId]) }}" class="btn btn-primary">Scopri di più</a>
    </div>
</div>