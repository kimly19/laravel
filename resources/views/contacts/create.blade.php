<!doctype html>
<html lang="en">

<head>
    <title>Contact App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <!-- place navbar here -->
        @extends('layouts.main')
    </header>

    @section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Contact</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                                @includeif('contacts._form')
                            </form>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <label for="first_name" class="col-form-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input name="first_name" id="first_name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="last_name" class="col-form-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input name="last_name" id="last_name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-form-label col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input name="email" id="email" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="col-form-label col-md-3">Phone Number</label>
                                        <div class="col-md-9">
                                            <input name="phone" id="phone" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="address" class="col-form-label col-md-3">Address</label>
                                        <div class="col-md-9">
                                            <textarea name="address" id="address" rows="3"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="company_id" class="col-form-label col-md-3">Company</label>
                                        <div class="col-md-9">
                                            <select class="form-select form-control" name="company_id" id="company_id">
                                                <option>Select Company</option>
                                                <option value="1">Company One</option>
                                                <option value="2">Company Two</option>
                                                <option value="3">Company Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="submit" class="btn btn-outline-light"
                                                style="color: orangered;">Save</button>
                                            <a name="" id="" class="btn btn-outline-secondary"
                                                href="{{ route('contacts.index') }}" role="button">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>