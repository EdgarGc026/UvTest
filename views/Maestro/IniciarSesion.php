<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>

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
            <li class="breadcrumb-item active">Inicio de Sesion Maestro</li>
        </ol>
    </nav>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">

                <!-- Default form login -->
                <form class="text-center  p-5" action="" method="" novalidate>
                    <p class="h4 mb-4">Inicio Sesion Maestro</p>
                        <input type="email" id="maestroEmail" class="form-control mb-4" placeholder="Correo electronico" required>
                        <!-- <div class="invalid-feedback "> Rellene este campo, por favor. </div> -->
                        
                        <input type="password" id="maestroPassword" class="form-control mb-4" placeholder="Contraseña" required>
                       <!--  <div class="invalid-feedback "> Rellene este campo, por favor. </div> -->

                    <div class="d-flex justify-content-around">
                        <div class="">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultRemember">
                                    <label class="custom-control-label" for="defaultLoginFormRemember">Recordar</label>
                            </div>
                        </div>

                    <div class="">
                        <!-- Forgot password -->
                        <a href="ReiniciarPassword.php">¿Has olvidado tu contraseña?</a>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block my-4" type="submit">Iniciar sesion</button>

                    <p>Si no tienes credenciales
                        <a href="Registro.php">Registrate</a>
                    </p>
                </form>
            </div>

            <div class="col col-md-6 p-5" >
                <div id="" class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nlDdqAIDk2A" frameborder="0"></iframe>
                </div>
            </div>       
        </div>
    </div>
</section>

    
</body>
</html>