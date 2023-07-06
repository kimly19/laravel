<!-- place navbar here -->
@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Contact Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-2">
                                        <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->first_name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->last_name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="phone" class="col-md-3 col-form-label">Phone Number</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->phone }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="address" class="col-md-3 col-form-label">Address</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->address }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="company_id" class="col-md-3 col-form-label">Company</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $contact->company->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-2">
                                        <div class="col-md-9 offset-md-3">
                                            <a class="btn btn-outline-light" style="color: orangered;"
                                                href="{{ route('contacts.edit', $contact->id) }}" role="button">Edit</a>
                                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?')" style="display: inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger" type="submit"
                                                    title="delete">Delete</button>
                                            </form>
                                            <a class="btn btn-outline-secondary" href="{{ route('contacts.index') }}"
                                                role="button">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection