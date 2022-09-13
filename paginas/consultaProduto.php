<?php
include_once "lib/conexao.php";
$sql_produtobusca =
  "SELECT *
                FROM produtos where id =" . $_GET["codigo"];
$consulta = $conn->prepare($sql_produtobusca);
$resultado = $consulta->execute();

while ($linha = $consulta->fetch()) { ?>
<table class="table table-striped table-bordered container">
    <th class=" text-center"><img src="img/<?php echo $linha[
      "imagem"
    ]; ?>" class="img-fluid img-thumbnail" style="width:350px;height:350px;"></th>
    <tr>
        <td class=" text-center"><strong><?php echo $linha[
          "descricao"
        ]; ?></strong></td>
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