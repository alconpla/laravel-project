<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Práctica 1</title>
  </head>
  <body class="text-center">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Login</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <!-- <a class="nav-item nav-link btn btn-primary " href="#">Login</a> -->
                </div>
            </div>
        </nav>
        <div class="col-md-12">
            
            <form class="form-signin mt-5" method="post" action="checkLogin">
                @csrf
                <img class="mb-4" src="https://raw.githubusercontent.com/laravel/art/master/laravel-logo.png" alt="" width="72" height="72">
                <h1 class="h2 mb-3 font-weight-normal">LOGIN</h1>
                @if(session('mensaje'))
                    <div class="alert alert-danger">
                        {{ session('mensaje') }}
                    </div>
                @endif
                <input type="email" id="email" name="email" class="form-control mt-3" placeholder="Introduce tu correo" value="pepe@gmail.com" required autofocus>
                <input type="password" id="password" name="password" class="form-control mt-2 mb-3" placeholder="Introduce tu contraseña" value="{{ old('password') }}" required>
                <a href="{{ action('MyController@forgot') }}">¿Olvidaste tu contraseña?</a>
                <input class="btn btn-lg btn-primary btn-block mt-3" type="submit" value="Iniciar sesión">
                <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>