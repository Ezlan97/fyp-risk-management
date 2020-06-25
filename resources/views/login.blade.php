<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login &mdash; Risk Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="text-center">
    
    <form method="POST" action="{{ route('guest.login') }}" class="form-signin" enctype="multipart/form-data">
        @csrf
        
        {{-- success --}}
        @if (Session::has('success'))
        <div>
            <div class="session alert alert-success" role="alert" id="session">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Berjaya!</strong> {{ Session::get('success') }}
            </div>
        </div>
        @endif
        
        {{-- danger --}}
        @if (Session::has('danger'))
        <div>
            <div class="session alert alert-danger" role="alert" id="session">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Gagal!</strong> {{ Session::get('danger') }}
            </div>
        </div>
        @endif

        <h1 class="text-center">System Pengurusan Risiko</h1>
        <br>
        <a href="/"><img href=""><img class="mb-4" src="{{ asset('images/logo.png') }}" alt="" width="160" height="190"></a>
        <h1 class="h3 mb-3 font-weight-normal">Log Masuk</h1>
        
        {{-- email --}}
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
        
        {{-- password --}}
        <label for="inputPassword" class="sr-only">Kata Laluan</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Kata Laluan" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        
        <p class="mt-5 mb-3 text-muted">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved UKM
        </p>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>