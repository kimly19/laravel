@extends('layouts.main')
<!-- yield -->
@section('title', 'ContactApp | Login')
@section('content')
<div class="col-md-4 m-auto my-5">
    <div class="shadow-sm">
        <h1 class="border-bottom p-4">Login</h1>
        <div class="px-4 pt-4">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid mt-4 pb-4">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                    <div class="text-center py-4 text-muted">
                        Don't have account?
                        <a class="text-muted fw-bold text-decoration-none" href="{{ route('register') }}" role="button">
                            Register
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection