<?php
include_once "lib/conexao.php";
$sql_produtobusca =
  "SELECT *
                FROM produtos where id =" . $_GET["codigo"];
$consulta = $conn->prepare($sql_produtobusca);
$resultado = $consulta->execute();

while ($linha = $consulta->fetch()) { ?>
<table class="table table-striped table-bordered container text-center">
    <th><img src="img/<?php echo $linha[
      "imagem"
    ]; ?>" class="img-fluid rounded"></th>
    <tr>
        <td><strong><?php echo $linha["descricao"]; ?></strong></td>
    </tr>
    <tr>
        <td><?php echo $linha["caracteristicas"]; ?></strong></td>
    </tr>
</table>
<?php }
?>