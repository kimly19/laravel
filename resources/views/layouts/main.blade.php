<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', 'Contact App')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet"> -->

</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-light border-bottom">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="{{ route('contacts.index') }}" style="color: orangered;">
                    <strong><i class='bi bi-person-lines-fill me-1'></i>Contact</strong> App
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact</a>
                        </li>
                        @endauth
                    </ul>
                    <!-- cannot use form in form -->
                    <!-- <form class="d-flex" role='search'> -->
                    <ul class="navbar-nav ml-auto d-flex justify-content-center align-items-center">
                        @guest
                        <li class="nav-item nav-link mx-1"><a href="{{ route('login') }}"
                                class="btn btn-outine-secondary border-secondary border-0" style="color: orangered;"><i
                                    class="bi bi-box-arrow-in-right"></i>
                                Login</a>
                        </li>
                        <li class="nav-item nav-link mx-1"><a href="{{ route('register') }}"
                                class="btn btn-outline-primary"><i class="bi bi-person-plus"></i>
                                Register</a>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                                        Settings
                                    </a>
                                </li>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button class=" dropdown-item">Logout</button>
                        </li>
                        </form>
                    </ul>
                    </li>

                    @endguest
                    </ul>
                    <!-- </form> -->
                </div>
            </div>
        </nav>

    </header>
    <main>
        @yield('content')

    </main>

    <!-- <footer class="py-5 footer bg-dark">
        <!-- place footer here -->
    <!-- <div class="container">
        <div class="row text-white">
            <div class="col-12 col-md">
                <strong>Contact App</strong>
                <small class="d-block mb-3">©2023</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none text-white">Email Marketing</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Email Template</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Email Broadcast</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Autoresponder Email</a></li>
                    <li><a href="#" class="text-decoration-none text-white">RSS-to-Email</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none text-white">Landing page Guide</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Inbound Marketing Guide</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Email Marketing Guide</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Helpdesk Guide</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#" class="text-decoration-none text-white">Team</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Locations</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Privacy</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Terms</a></li>
                </ul>
            </div>
        </div>
    </div> -->

    </footer> -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>