<script src="js/jquery-3.6.1.min.js"></script>
<?php

include_once "lib/conexao.php";
$sql_produtobusca =
  "SELECT *
   FROM produtos 
   where id =" . $_GET["codigo"];
$consulta = $conn->prepare($sql_produtobusca);
$resultado = $consulta->execute();

while ($linha = $consulta->fetch()) { ?>
<table class="table table-striped table-bordered container bg-light" border="5">
    <th class=" text-center"><img src="img/<?php echo $linha[
      "imagem"
    ]; ?>" class="img-fluid img-thumbnail bg-light" style="width:350px;height:350px;"></th>
    <tr>
        <td class=" text-center bg-light"><strong><?php echo $linha[
          "descricao"
        ]; ?></strong> &nbsp;&nbsp;&nbsp;<button class="sacola btn bg-info"><img src="img/compra.png"
                    style="width:20px;height:20px;"></button>
            <script>
            $(".sacola").click(function() {
                $.post("", {
                    "adicionarNaSacola": true
                }, function(data, status) {
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Seu produto foi adicionado na sacola',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })
                });
            });
            </script></td>
    </tr>
    <tr>
        <td><strong>Código produto:</strong> <?php echo $linha[
          "id"
        ]; ?></strong></td>
    </tr>
    <tr>
        <td><strong>Valor produto:</strong> <?php echo $linha[
          "valor"
        ]; ?></strong></td>
    </tr>
    <tr>
        <td><strong>Especificação leiga produto:</strong> <?php echo $linha[
          "resumo"
        ]; ?></strong></td>
    </tr>
    <tr>
        <td> <strong>Especificações produto:</strong><br><?php
        $str = str_replace("-", "<br>-", $linha["caracteristicas"]);
        echo $str;
        ?></td>
    </tr>
</table>
<?php }
?>