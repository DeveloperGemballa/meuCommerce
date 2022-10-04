<title>Bem-Vindo(a) a listagem!</title>

<div class="container shadow bg-light">
    <div class="row">
        <?php
        include_once "lib/conexao.php";
        $sql_produto = "SELECT *
                        FROM produtos";
        $consulta2 = $conn->prepare($sql_produto);
        $resultadoproduto = $consulta2->execute();
        if (isset($_GET["numeroid"])) {
          $sql_produto =
            "SELECT *
                FROM produtos 
                WHERE categoria_id = " . $_GET["numeroid"];
          $consulta2 = $conn->prepare($sql_produto);
          $resultadoconsulta = $consulta2->execute();
          echo "<div class='alert alert-info' align='center'>Filtragem de produtos ativo</div>";
        } else {
          echo "<div class='alert alert-warning' align='center'>Mostrando todos os produtos no catálogo</div>";
        }
        ?>
        <?php while (
          $linhaconsultaproduto = $consulta2->fetch()
        ) { ?><div class="card shadow" style="width:18rem;margin:10px;">
            <img src="img/<?php echo $linhaconsultaproduto[
              "imagem"
            ]; ?>" class="card-img-top img-fluid bottom">
            <div class="card-body">
                <h5 class="card-title"><?php echo $linhaconsultaproduto[
                  "descricao"
                ]; ?></h5>
                <a href="?pagina=paginas/consultaProduto&codigo=<?php echo $linhaconsultaproduto[
                  "id"
                ]; ?>" class="btn btn-primary shadow">Detalhes</a>
                <a href="#" class="btn bg-info shadow"><img src="img/compra.png" style="width:20px;height:20px;"></a>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
    </div>
</div>