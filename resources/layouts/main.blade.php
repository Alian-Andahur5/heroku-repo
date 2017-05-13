<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css">

             .hide {
                  display:none;
              }

        </style>


        @yield('head')

    </head>
    <body>
      <nav>
          <div class="nav-wrapper">
          <a href="#" class="brand-logo"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="registro">Registrarse</a></li>
              <li><a href="login">Iniciar sesion</a></li>
          </ul>
          </div>
      </nav>

      @yield('content')

      <script src="js.jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
      </script>
      


        @yield('scripts')

    </body>

</html>
