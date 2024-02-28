<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – E-Tugas Tamansiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("img/blank-picture-frame-parquet-floor_327072-24292.avif");
            /* Gambar latar belakang */
            background-position: center;
            /* Posisi gambar latar belakang */
            background-size: cover;
            /* Ukuran gambar latar belakang */
            background-repeat: repeat;
            /* Pengulangan gambar latar belakang */
        }
    </style>
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>E-Tugas</b><br>Tamansiswa</h3>
                <hr>
                @if(session('error'))
                <div class="alert alert-danger"> <b>Opps!</b>

                    {{session('error')}} </div>
                @endif
                <form action="{{ route('actionlogin') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <hr>
                    <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>

                </form>
        </div>
    </div>
</body>

</html>
