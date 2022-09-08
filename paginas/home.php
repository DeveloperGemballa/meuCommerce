<title>Bem-Vindo(a) ao Lobby!</title>

<div class="container shadow">
    <div class="row">
        <?php
        include_once "lib/conexao.php";
        $sql_produto = "SELECT *
                FROM produtos";
        $consulta = $conn->prepare($sql_produto);
        $resultado = $consulta->execute();
        ?>
        <?php while (
          $linha = $consulta->fetch()
        ) { ?><div class="card" style="width:18rem;">
            <img src="img/<?php echo $linha["imagem"]; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">SmartPhone</h5>
                <p class="card-text"><?php echo $linha["descricao"]; ?></p>
                <a href="?pagina=paginas/consultaProduto&codigo=<?php echo $linha[
                  "id"
                ]; ?>" class="btn btn-primary"><?php echo $linha[
  "valor"
]; ?></a>
            </div>
        </div><?php } ?>

        <div class="card" style="width: 18rem;">
            <img src="img/produto2.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PRODUCT</h5>
                <p class="card-text">Some quick example text to build on the PRODUCT and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>
</div>