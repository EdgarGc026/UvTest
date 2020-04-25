<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sordos</title>

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
                <a href="inicio.php" class="navbar-brand">Bienvenido(a)</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav  ml-auto">
                        <li role="presentation" class="nav-item"><a href="views/Maestro/iniciarSesion.php" class="nav-link"><span class="fas fa-sign-in-alt"> Iniciar Sesion</a></span></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> 

    <nav aria-label="breadcrumb" class="col-md-6 offset-3">
        <ol class="breadcrumb cyan lighten-4">
            <li class="breadcrumb-item active">Inicio</li>
        </ol>
    </nav>

    <section id="main">
        <div class="container">
            <div  class="row"> <!-- Filas General div-->
                <div id="alumnos" class="row"> <!-- Primera Fila -->
                <div class="col col-md-5 p-5" > 
                    <h2 class="text-center">Objetivos para los alumnos</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ea laudantium accusantium necessitatibus dignissimos sapiente quos, 
                        dicta quisquam id ducimus recusandae nesciunt hic, culpa repellendus quaerat dolor optio similique reiciendis.</p>
                </div>

                <div class="col-md-6  p-5">
                    <div id="alumnos" class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KZVTziJ9hg4" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
                  
                <div id="alumno" class="row">
                    <div class="col col-md-5 p-5">
                        <h2 class="text-center">Objetivo para el alumno</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ea laudantium accusantium necessitatibus dignissimos sapiente quos, 
                            dicta quisquam id ducimus recusandae nesciunt hic, culpa repellendus quaerat dolor optio similique reiciendis.</p>
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