<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login laravel</title>
    <link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.css')}}">
</head>
<body>

    <div class="text-center mt-5">
        <h2>Login</h2>
        <p>Silahkan masuk dengan akun anda</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{{route ('login.submit')}}}" method="post">
                            @csrf
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2" placeholder="Email" aria-label="Email" name="email">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2" placeholder="Password" aria-label="Password" name="password">
                            <button class="btn btn-primary">Submit Login</button> 
                        </form>
                        @if (session ('gagal'))
                        <p class="text-danger">{{ session('gagal') }}</p>    
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>