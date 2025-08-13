    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top"
        style="background: linear-gradient(90deg, #0f2027, #203a43, #2c5364); width: 100%;">
        <div class="container-fluid px-5">

            <!-- Brand on the left -->
            <a class="navbar-brand fw-bold d-flex align-items-center ticket-logo" href="{{ route('home') }}">
                <i class="fas fa-ticket-alt me-2 animated-icon"></i>
                Janta-Mart
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
    <div class="bg-light shadow-sm py-3 mb-0 sticky-top" style="top: 56px; z-index: 1020;">
        <div class="d-flex justify-content-center flex-wrap">
            <a class="nav-link text-dark px-4" href="{{ url('category/electronics') }}">Electronics</a>
            <a class="nav-link text-dark px-4" href="#">Fashion</a>
            <a class="nav-link text-dark px-4" href="#">Electronics</a>
            <a class="nav-link text-dark px-4" href="#">Furniture</a>
            <a class="nav-link text-dark px-4" href="#">Grocery</a>
            <a class="nav-link text-dark px-4" href="#">Appliances</a>
        </div>
    </div>
