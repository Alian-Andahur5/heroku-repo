<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <style type="text/css">

      </style>
    </head>
    <body>
    <input id="name" type="text" name="name">
        <button id="btn" class="btn-lg btn-primary">Enviar</button>


    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
     $(document).ready(function(){
        $("#btn").click(function(){
            var name = $('#name').val();

        });
    });
    </script>

    </body>

</html>
