<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reniciar Contraseña</title>

    <!-- Importar librerias Bootstrap, JS, Icons y Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a296fa0db7.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
        <nav class="navbar navbar-expand">
            <div class="container">
                <a href="../../inicio.php" class="navbar-brand">Bienvenido(a)</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <!-- <ul class="nav  ml-auto">
                        <li role="presentation" class="nav-item"><a href="views/Maestro/IniciarSesion.php" class="nav-link"><span class="fas fa-sign-in-alt"> Iniciar Sesion</a></span></li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </div> 

    <nav aria-label="breadcrumb" class="col-md-6 offset-3">
        <ol class="breadcrumb cyan lighten-4">
            <li class="breadcrumb-item ">Inicio</li>
            <li class="breadcrumb-item active">Restablecer Contraseña</li>
        </ol>
    </nav>

    <section id="main">
        <div class="container">
             <div class="row justify-content-center">
                <form class="text-center p-5" action="#!">
                    <p class="h4 mb-4">Restablece tu contraseña</p>
                    <p>Ingresa con tu correo electronico registrado</p>

                    <input type="email" id="resetEmail" class="form-control mb-4" placeholder="Correo electronico">
                    <!-- Sign in button -->
                    <button class="btn btn-primary btn-block" type="submit">Restablecer</button>

                <hr>

                    <p>¿No deseas restablecer tu contraseña?
                        <a href="IniciarSesion.php">Inicia Sesion</a>
                    </p>      
                </form>
                      
            </div>
        </div>
    
    </section>
    
</body>
</html>