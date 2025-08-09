<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2); /* Similar to login page */
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            border: none;
        }
        .card-header {
            background: linear-gradient(45deg, #007bff, #0056b3);
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg rounded-4">
                <div class="card-header text-white text-center py-4 rounded-top-4">
                    <h3 class="mb-0">Create Your Account</h3>
                </div>
                <div class="card-body px-4">

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Error Messages --}}
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    {{-- Registration Form --}}
                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">👤 Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">📧 Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">🔒 Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">🔁 Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold py-2 mt-3">🚀 Register</button>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <small>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login here</a></small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
