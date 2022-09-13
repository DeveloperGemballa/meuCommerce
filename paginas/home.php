<title>Bem-Vindo(a) a listagem!</title>

<div class="container shadow">
    <div class="row">
        <?php
        include_once "lib/conexao.php";
        $sql_produto = "SELECT *
                FROM produtos";
        $consulta = $conn->prepare($sql_produto);
        $resultado = $consulta->execute();
        if (isset($_GET["numeroid"])) {
          $sql_consultaproduto =
            "SELECT *
                FROM produtos inner join categorias where categorias.id=" .
            $_GET["numeroid"] .
            " AND produtos.categoria_id=" .
            $_GET["numeroid"];
          $consulta = $conn->prepare($sql_consultaproduto);
          $resultado = $consulta->execute();
          echo "<div class='alert alert-info' align='center'>Filtragem de produtos ativo</div>";
        } else {
          echo "<div class='alert alert-warning' align='center'>Mostrando todos os produtos no catálogo</div>";
        }
        ?>
        <?php while (
          $linha = $consulta->fetch()
        ) { ?><div class="card" style="width:18rem;">
            <img src="img/<?php echo $linha["imagem"]; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">categoria</h5>
                <p class="card-text"><?php echo $linha["descricao"]; ?></p>
                <a href="?pagina=paginas/consultaProduto&codigo=<?php echo $linha[
                  "id"
                ]; ?>" class="btn btn-primary"><?php echo $linha[
  "valor"
]; ?></a>
            </div>
        </div><?php } ?>
    </div>
</div>