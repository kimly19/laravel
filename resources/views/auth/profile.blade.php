@extends('layouts.main')
<!-- yield -->
@section('title', 'ContactApp | Profile')
@section('content')
<div class="col-md-4 m-auto my-5">
    <div class="shadow-sm">
        <h1 class="border-bottom p-4">Profile
            <a role="button" href="">
                <i class="bi bi-pencil-square fs-6 position-absolute ms-2" aria-hidden="true" style="color: orangered;">
                </i>
            </a>
        </h1>
        <div class="px-4 pt-4">
            <form action="{{ route('profile.show') }}" method="GET">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label fw-bold fs-5">Name</label>
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="mb-5">
                    <label for="email" class="form-label fw-bold fs-5">Email</label>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="row">
                    <!-- g = gutter which make space between col or row -->
                    <div class="col-md-9 offset-md-8 mb-4 d-flex gap-3">
                        <button class="btn btn-outline-light border-0 btn-block" type="submit"
                            style="color: orangered;">Save</button>
                        <button class="btn btn-outline-secondary btn-block" type="submit">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection