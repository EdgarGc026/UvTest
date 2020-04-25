<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Maestro</title>

    <!-- Importar librerias Bootstrap, JS, Icons y Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a296fa0db7.js" crossorigin="anonymous"></script>
    <script src="../../bootstrap/js/main.js"></script>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand">
            <div class="container">
                <a href="index.php" class="navbar-brand">Bienvenido(a)</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"></button>
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
            <li class="breadcrumb-item active">Formulario registro Maestro</li>
        </ol>
    </nav>

    <section id="main">
        <div class="container">
            <div class="row">
                    <div class="col col-md-6">
                        <form class="text-center p-5" action="MenuMaestro.php" method="POST">
                            <p class="h4 mb-4">Registro de Maestro</p>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" id="registroNombre" class="form-control" placeholder="Nombres" required>
                                </div>

                                <div class="col">
                                    <input type="text" id="registroApellidos" class="form-control" placeholder="Apellidos" required>
                                </div>
                            </div>
                            
                            <input type="email" id="registroCorreo" class="form-control mb-4" placeholder="Correo electronico" required>
                            <input type="password" id="registroPassword" class="form-control" placeholder="Contraseña" aria-describedby="registroPasswordHelpBlock" required>
                            <small id="registroPasswordHelpBlock" class="form-text text-muted mb-4">
                                Recuerda, contraseña mayor a 6 caracteres, 1 Mayuscula y 1 digito.
                            </small>
                            <input type="text" id="registroCelular" class="form-control" placeholder="Celular" required>
                            <button  class="btn btn-primary my-4 btn-block" type="submit">Registrate</button>

                        <hr>
                        <p> Ya tienes cuenta
                            <a href="IniciarSesion.php">Inicia Sesion</a>
                        </p>
                        </form>
                    </div>

                    <div class="col col-md-6 p-5">
                        <div id="" class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nlDdqAIDk2A" frameborder="0"></iframe>
                        </div>
                    </div>       
            </div>
        </div>
    </section>
    
</body>
</html>