<?php
if(isset($_POST['limpar_sacola']))
{
    unset($_SESSION['sacola']);
}
if (isset($_SESSION['sacola'])) { ?>
<form method="post" class="container">
    <input class="btn btn-danger" type="submit" name="limpar_sacola" value="Limpar sacola">
</form>
<table class="table table-striped container bg-light">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descricao</th>
            <th scope="col">Valor</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $chaves = array_keys($_SESSION['sacola']);
        foreach ($chaves as $item) {

            //select produto
            $sql_produto = 'SELECT * from produtos where id = :id';
            $produto = $conn->prepare($sql_produto);
            $produto->execute(['id' => $_SESSION['sacola'][$item]]);
            $produto = $produto->fetch();
            ?>
        <tr>
            <th scope="row"><?php echo $produto['id']; ?></th>
            <td><?php echo $produto['descricao']; ?></td>
            <td><?php echo $produto['valor']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="produto" value="<?php echo $item; ?>">
                    <input class="btn btn-danger container" type="submit" name="remover_sacola" value="Remover">
                </form>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>
<div class="container">
    <a class="btn btn-primary" href="?pagina=paginas/realizar_pedido">Realizar pedido</a>
</div>


<?php } else {echo '<div class="alert container alert-warning"><h3>Nenhum produto adicinado a sacola!</div>';}
?>