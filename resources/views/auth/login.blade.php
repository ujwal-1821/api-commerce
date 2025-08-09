<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - MyApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border: none;
            border-radius: 20px;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #4e54c8;
            color: white;
            border-radius: 10px;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #3e40a5;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-group {
            position: relative;
        }

        .form-group input {
            padding-left: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <div class="card-header text-center bg-transparent border-0 mb-3">
                        <h3 class="text-primary fw-bold">Login to Your Account</h3>
                        <p class="text-muted">Welcome back! Please login to continue.</p>
                    </div>

                    <div class="card-body">
                        {{-- Flash Messages --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        {{-- Login Form --}}
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf

                            <div class="form-group mb-4">
                                <i class="bi bi-envelope form-icon"></i>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="form-group mb-4">
                                <i class="bi bi-lock form-icon"></i>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password" required>
                            </div>

                            <div class="text-end mb-4">
                                <a href="{{ route('password.request') }}" class="text-decoration-none text-muted">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-custom w-100">Login</button>
                        </form>
                    </div>

                    <div class="card-footer bg-transparent text-center mt-3">
                        <small class="text-muted">
                            Don't have an account?
                            <a href="{{ route('register.form') }}"
                                class="text-decoration-none text-primary fw-bold">Register</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>

</html>
