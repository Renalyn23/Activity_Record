<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Garfield Paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
           background: url('print.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 20px;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            padding: 2.5rem;
            max-width: 420px;
            width: 100%;
            margin: 0 auto;
        }
        .cat-icon { color: #ffb300; font-size: 1.8rem; margin-right: 0.5rem; }
        .btn-garfield { background-color: #ff8c00; border: none; }
        .btn-garfield:hover { background-color: #e67e00; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <main class="w-100">
        <section class="auth-card">
            <header class="text-center mb-4">
                <h2 class="d-flex align-items-center justify-content-center">
                    <i class="fas fa-cat cat-icon"></i> Welcome Back
                </h2>
                <p class="text-muted">Login to your account</p>
            </header>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-garfield w-100 text-white fw-medium">Login</button>
            </form>
            <footer class="mt-4">
                <p class="text-center mb-2">
                    Don't have an account? <a href="register.php">Register here</a>
                </p>
                <p class="text-center mb-0">
                    <a href="index.html"><i class="fas fa-arrow-left me-1"></i> Back to Home</a>
                </p>
            </footer>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>