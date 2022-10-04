<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <style>
        body {
            animation: changeBg 5s infinite alternate linear;
        }

        @keyframes changeBg {
            0% {
                background: #ee6055;
            }

            25% {
                background: #60d394;
            }

            50% {
                background: #aaf683;
            }

            75% {
                background: #ffd97d;
            }

            100% {
                background: #ff9b85;
            }
        }
        </style>
    </head>
    <?php
    include "acoes/menu.php";
    if (isset($_GET["pagina"])) {
      include $_GET["pagina"] . ".php";
    } elseif (!isset($_GET["pagina"])) {
      include "paginas/inicio.php";
    } else {
      include "paginas/paginaEmBranco.php";
    }
    ?>

    <body>

    </body>

</html>