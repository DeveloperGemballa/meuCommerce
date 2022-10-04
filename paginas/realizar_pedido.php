<div class="alert alert-info container">

    <h1>
        Finalizar pedido.
</h1>

<?php if (isset($_POST['gravar_pedido'])) {
    echo '<div class="alert alert-success" role="alert">
    Pedido realizado com sucesso!
    </div>';
    //zera o carrinho
    unset($_SESSION['sacola']);
} else {
    ?>

<form method="post">
    <input class="btn btn-success" type="submit" name="gravar_pedido" value="Confirmar!">
</form>

<?php
}
?>
</div>