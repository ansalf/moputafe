@extends('layouts.master')

@section('content')
<<<<<<< HEAD

    <body>
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Masuk</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Masuk</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-5">Masuk</h1>
                </div>

                <div class="container col-xl-8 col-xxl-6">
                    <div class="row align-items-center py-5">

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger col-lg-10 mx-auto col-lg-5" role="alert">
                                {{ session('loginError') }}
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success col-lg-10 mx-auto col-lg-5" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="col-lg-8 mx-auto col-lg-4">
                            <form action="/login" method="POST" class="p-4 p-md-5 border rounded-3 bg-light"
                                autocomplete="off">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" style="border-radius: 10px;" placeholder="Username">
                                    <label for="username">Username</label>
                                    @error('username')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" style="border-radius: 10px;" placeholder="Password">
                                    <label for="password">Password</label>
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="w-100 btn btn-lg btn-secondary" type="submit"
                                    style="border-radius: 30px;"><a href="/dashboard"
                                        style="color: white; text-decoration:none;">Login</button>
                                <hr class="my-4">
                                <div class="text-center">
                                    <small class="text-muted text-center">Not registered? <a href="/register">Register
                                            Now!</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 4b97202c344790aff67c33da0482e30ae8441af2
