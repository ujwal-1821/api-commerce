<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketSys - Support Ticketing System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
            margin-left: 15px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .hero-section {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            padding: 120px 20px 80px;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.3rem;
            margin-top: 20px;
        }

        .hero-section .btn {
            margin-top: 30px;
            padding: 10px 30px;
            font-size: 1rem;
        }

        .api-section {
            padding: 60px 20px;
            background-color: #f8f9fa;
        }

        .api-section .card {
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .api-section .card:hover {
            transform: translateY(-5px);
        }

        .api-section .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        footer {
            background: #1c1c1c;
            color: #ccc;
            padding: 40px 0;
        }

        footer a {
            color: #ccc;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            color: #ffc107;
        }

        footer i {
            margin-right: 8px;
        }
    .ticket-logo {
    color: white;
    text-decoration: none;
    font-size: 1.3rem;
}

.animated-icon {
    background: linear-gradient(270deg, #ffcc00, #00c8ff, #ff00c8, #ffcc00);
    background-size: 600% 600%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientMove 5s ease infinite;
    font-size: 1.5rem;
    text-shadow: 0 0 10px rgba(255, 204, 0, 0.6);
}

.ticket-logo:hover .animated-icon {
    text-shadow: 0 0 15px rgba(255, 204, 0, 1);
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}


    </style>
</head>
<body>

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 shadow-sm">
    <a class="navbar-brand fw-bold d-flex align-items-center ticket-logo" href="#">
        <i class="fas fa-ticket-alt me-2 animated-icon"></i>
        TicketSys
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
        {{-- Left links --}}
        <ul class="navbar-nav ms-5">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tickets</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
        </ul>

        {{-- Right links --}}
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('register.form') }}">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        </ul>
    </div>
</nav>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to <span style="color: #ffc107;">TicketSys</span></h1>
            <p>Fast and simple support ticket management for your business</p>
            <a href="{{ route('register.form') }}" class="btn btn-warning text-dark rounded-pill">Get Started</a>
        </div>
    </section>

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; {{ date('Y') }} <strong>TicketSys</strong>. All rights reserved.</p>
            <div class="mb-2">
                <a href="#"><i class="fas fa-shield-alt"></i> Privacy</a>
                <a href="#"><i class="fas fa-file-contract"></i> Terms</a>
                <a href="#"><i class="fas fa-envelope"></i> Contact</a>
            </div>
            <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
