<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            padding: 20px;
        }
        .btn-primary {
            background-color: #2575fc;
            border: none;
        }
        .btn-primary:hover {
            background-color: #1e63db;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .login-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .alert {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-column">
                <div class="card p-4">
                    <div class="card-body text-center">
                        <h3 class="mb-3">Login</h3>
                        <p class="text-muted">Silahkan masuk dengan akun Anda</p>
                        @if (session('gagal'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Login Gagal!</strong> Periksa kembali email dan password Anda.
                        </div>
                        @endif
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <div class="mb-3 text-start">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
