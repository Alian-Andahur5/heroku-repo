<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    </head>

    <body>

        <nav>
            <div class="nav-wrapper">
            <a href="/" class="brand-logo">Inicio</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="registro">Registrarse</a></li>
                <li><a href="login">Iniciar sesion</a></li>
            </ul>
            </div>
        </nav>

        <div class="container">
         <div class="row">
            <form class="col s12">
            <div class="row">
            </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input id="nombre" type="text">
                    <label for="nombre">Nombre</label>
                    </div>
                    </div>
                <div class="row">
                    <div class="input-field col s6">
                    <input id="email" type="text">
                    <label for="email">Email</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input id="contraseña" type="text">
                    <label for="contraseña">Contraseña</label>
                    </div>
                    </div>
                <div class="row">
                <div class="input-field col s6">
                    <input id="recontraseña" type="text">
                    <label for="recontraseña">Ingrese nuevamente la contraseña</label>
                    </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn z-depth-5">confirmar</a>
        </div>

        <script src="js.jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>

</html>