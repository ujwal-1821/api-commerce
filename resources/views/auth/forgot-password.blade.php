<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      min-height: 100vh;
    }
    .card {
      border: none;
      border-radius: 1rem;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #6a11cb;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow p-4">
          <div class="text-center mb-4">
            <i class="bi bi-envelope-lock-fill fs-1 text-primary"></i>
            <h3 class="mt-2">Forgot Password?</h3>
            <p class="text-muted">Enter your email address and we’ll send you a link to reset your password.</p>
          </div>

          <!-- Success message -->
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif

          <!-- Forgot Password Form -->
          <form method="POST" action="{{ route('password.submit') }}">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
          </form>

          <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
