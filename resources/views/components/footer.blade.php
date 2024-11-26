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