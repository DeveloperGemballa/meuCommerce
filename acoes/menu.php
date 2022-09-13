<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-light container shadow bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/title.png" style="width:100px;height:70px;" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?pagina=paginas/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle disabled" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="procuraprodutos.php" method="POST">
                        <input class="form-control me-2 shadow-sm" type="search" placeholder="Procurar"
                            aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Procurar</button>
                    </form>
                </div>
            </div>
        </nav>
        <hr class="container bg-dark">
        <?php
        include_once "lib/conexao.php";
        $sql = "SELECT *
                FROM categorias ";
        $consulta = $conn->prepare($sql);
        $resultado = $consulta->execute();
        ?>

        <?php if (
          isset($_GET["pagina"]) &&
          $_GET["pagina"] != "paginas/consultaProduto"
        ) { ?>
        <div style="position:relative;float:left;width:125px;margin:2px;">
            <div class="card">
                <?php while ($linha = $consulta->fetch()) { ?>
                <strong>
                    <?php if (empty($linha["categoria_pai"])) {
                      echo "<div class='card-header text-start bg-secondary bg-gradient' style='font-size:15px;'><p>" .
                        $linha["descricao"] .
                        "</p></div>";
                    } elseif ($linha["categoria_pai"] != "NULL") {
                      echo "<a href='?pagina=paginas/home&numeroid=" .
                        $linha["id"] .
                        "' class='btn float-right text-start' style='font-size:12px;'>• " .
                        $linha["descricao"] .
                        "</a>";
                    }} ?>
                </strong>
                <?php } ?>
            </div>
        </div>
    </body>

</html>