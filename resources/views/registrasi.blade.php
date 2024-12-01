<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi laravel</title>
    <link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.css')}}">
</head>
<body>

    <div class="text-center mt-5">
        <h2>Registrasi</h2>
        <p>Silahkan isi formulir berikut</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{route ('registrasi.submit')}}" method="post">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2" placeholder="Masukkan Nama Lengkap">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2" placeholder="Masukkan Email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label>Password</label>
                            <input type="text" name="password" class="form-control mb-2" placeholder="Masukkan Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <button class="btn btn-primary">Submit Registrasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>