@extends('layouts.admin')

@section('container')
    <h1 class="h2">Edit User</h1>

    <div class="col-lg-8">
        <a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">Back</a>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name', $user->name) }}" placeholder="Nama">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" required autofocus value="{{ old('email', $user->email) }}"
                    placeholder="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                    placeholder="id">
                @error('id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" required autofocus placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Role</label>
                <select name="is_admin" id="is_admin" class="form-select">
                    @if ($user->role)
                        <option selected value="1">Admin</option>
                        <option value="0">User</option>
                    @else
                        <option selected value="0">User</option>
                        <option value="1">Admin</option>
                    @endif
                </select>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
