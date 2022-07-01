<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
@auth
                    <li class="nav-item">
                        <p class="lead mx-5"  >Ciao {{auth()->user()->name}}</p>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link p-menu"  href="/manage"><i class="bi bi-kanban"></i>Gestione</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="btn btn-warning btn-lg" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    </li>

@else
                    <li class="nav-item">
                        <a class="nav-link p-menu"  href="/register"><i class="bi bi-person-plus"></i>REGISTRATI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-menu" href="/login"><i class="bi bi-box-arrow-in-right"></i>LOGIN</a>
                    </li>
                    @endauth
                    <li class="nav-item mx-5">
                        <a class="btn btn-primary btn-lg register" href="notes/create" role="button"><i class="bi bi-plus-circle-fill"></i>NUOVA NOTA</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="/">
                    <input class="form-control me-2" type="search"  name="search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </nav>
<x-flash-message />
@yield('content')
</div>

    <footer class="py-3">

        <div class="row">
            <div class="col-md-5 col-sm-4"></div>

            <div class="col-md-2 col-md-4 extra-small">
                <p class="text-white mb-3"><em>Copyright&copy;</em></p>
                <p class="text-white mb-5"><i class="bi bi-envelope"></i>mail@mail.it</p>
            </div>
            <div class="col-md-5 col-sm-4"></div>

        </div>


</footer>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>
