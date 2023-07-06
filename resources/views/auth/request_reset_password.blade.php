@extends('layouts.main')
<!-- yield -->
@section('title', 'ContactApp | Request Reset Password')
@section('content')
<div class="col-md-4 m-auto my-5">
    <div class="shadow-sm">
        <h1 class="border-bottom p-4">Request Reset Password</h1>
        <div class="px-4 pt-4">
            @if($message = session('message'))
            <div class="alert alert-success">{{ $message }}</div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid mt-4 pb-4">
                    <button class="btn btn-primary btn-block" type="submit">Request Reset Password Link</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection