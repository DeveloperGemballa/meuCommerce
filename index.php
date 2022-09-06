<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    include "acoes/menu.php";
    if (isset($_GET["pagina"])) {
      include $_GET["pagina"] . ".php";
    } else {
      include "paginas/home.php";
    }
    ?>

    <body>

    </body>

</html>