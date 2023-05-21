@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        welcome to user Dashboard
                        {{ __('You are logged in!') }}
                        <br /> <br />

                        <div class="container">
                            <button class="button"><a href="/board" style="text-decoration: none; color:black;">Start Game</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
