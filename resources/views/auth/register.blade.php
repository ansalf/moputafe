@extends('layouts.master')

@section('content')
    <div class="container col-xl-7 col-xxl-5">
        <div class="row align-items-center py-5">
            <h2 class="text-center mb-4"style="padding-top: 150px">Register</h2>
            <div class="col-lg-12 mx-auto col-lg-5">
                <form action="{{ route('store') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light"
                    autocomplete="off">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" placeholder="Username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Password" value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit">Register</button>
                    <hr class="my-4">
                    <div class="text-center">
                        <small class="text-muted text-center">Already registered? <a href="/login">Login!</a></small>
                    </div>
                </form>
            </div>
            @include('layouts.footer')
        </div>
    </div>
@endsection
