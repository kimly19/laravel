@extends('layouts.main')

@section('content')
<!-- py is padding the top -->
<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title m-0 card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="m-0">All Contacts</h4>
                            <div class="m-0">
                                <a href="{{ route('contacts.create') }}" class="btn mt-1" style="color: orangered;">
                                    <i class="bi bi-plus-square"></i> Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @includeif('contacts._filter')
                        @if($message = session('message'))
                        <div class="alert alert-success">{{ $message }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($contacts as $key => $contact)
                                    @includeif('contacts._contact')
                                    @empty
                                    @include('contacts._empty')
                                    @endforelse
                                    <!-- @if(count($contacts))
                                        @foreach($contacts as $key => $contact)
                                        @include('contacts._contact')
                                        @endforeach
                                        @else
                                        <p>No Contact found</p>
                                        @endif -->
                                </tbody>
                            </table>
                            {{ $contacts->withQueryString()->links() }}
                        </div>
                        <!-- <nav class="mt-4">
                                <ul class="pagination justify-align-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="bi bi-arrow-left-circle"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="color: orangered;">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="color: orangered;">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="color: orangered;">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" style="color: orangered;">
                                            <i class="bi bi-arrow-right-circle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
        </div> -->
</main>
@endsection