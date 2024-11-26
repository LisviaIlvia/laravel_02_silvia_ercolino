<x-layout>
    {{-- Main Content --}}
    <main class="container-fluid">
        {{-- Hero Section --}}
        <section class="header d-flex align-items-center justify-content-center text-center py-5">
            <h1 class="display-4 text">{{ $titolo }}</h1>
        </section>

        {{-- Team Cards --}}
        <section class="team py-5">
            <div class="row wrapper-cards d-flex align-items-center justify-content-center">
                @foreach ($team as $member)
                    <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                        <x-card 
                        {{-- Passo i dati al componente CARD sfruttando degli attributi html custom--}}
                            memberName="{{ $member['name'] }}" 
                            memberSurname="{{ $member['surname'] }}" 
                            memberRole="{{ $member['role'] }}"
                            memberId="{{ $member['id'] }}"
                            memberImg="{{ $member['img'] }}">
                        </x-card>
                    </div>
                @endforeach        
            </div>
        </section>
    </main>
</x-layout>
