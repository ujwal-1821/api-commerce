<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JantaMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top"
    style="background: linear-gradient(90deg, #0f2027, #203a43, #2c5364); width: 100%;">
        <div class="container-fluid px-5">

            <!-- Brand on the left -->
            <a class="navbar-brand fw-bold d-flex align-items-center ticket-logo" href="#">
                <i class="fas fa-ticket-alt me-2 animated-icon"></i>
                JantaMart
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">

                <!-- Left side (empty for spacing if needed) -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Center: Search bar -->
                <form class="d-flex mx-auto search-bar" style="max-width: 350px; width: 100%;">
                    <input class="form-control rounded-start-pill shadow-sm border-0" type="search"
                        placeholder="Search..." aria-label="Search">
                    <button class="btn btn-warning rounded-end-pill shadow-sm" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <!-- Right side -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-4">
                        <a href="#" class="btn btn-gradient rounded-pill btn-sm px-3">Become a Seller</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link position-relative icon-hover" href="#">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-gradient rounded-pill btn-sm px-3" href="{{ route('login') }}">
                            <i class="fas fa-user me-1"></i> Login
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <main class="fluid-container mt-0 mb-5">
        @yield('content')
    </main>
    


    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold"><i class="fas fa-ticket-alt me-2 animated-icon"></i> JantaMart</h5>
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
                <span>&copy; {{ date('Y') }} JantaMart. All rights reserved.</span>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
