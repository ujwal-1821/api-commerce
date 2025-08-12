   <footer class="mt-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold"><i class="fas fa-ticket-alt me-2 animated-icon"></i> Janta-Mart</h5>
                    <p class="small">Your trusted marketplace for everything you need.</p>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <a href="#">Privacy</a> |
                    <a href="#">Terms</a> |
                    <a href="#">Contact</a>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-pill me-2">Become a Seller</a>
                    <a href="{{ route('login') }}" class="btn btn-warning btn-sm rounded-pill text-dark">
                        <i class="fas fa-user"></i> Login
                    </a>
                </div>
            </div>
            <hr class="border-secondary mt-3">
            <div class="d-flex justify-content-between flex-wrap small text-center text-md-start">
                <span>&copy; {{ date('Y') }} Janta-Mart. All rights reserved.</span>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>