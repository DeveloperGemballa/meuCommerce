<?php
$contagemProduto = $conn->prepare("SELECT count(*) as id FROM produtos");
$contagemProduto->execute();

$numeroFinal = $contagemProduto->fetch();
?>
<title>Lobby - Home</title>
<style>
body {
    animation: changeBg 5s infinite alternate linear;
}

@keyframes changeBg {
    0% {
        background: #ee6055;
    }

    25% {
        background: #60d394;
    }

    50% {
        background: #aaf683;
    }

    75% {
        background: #ffd97d;
    }

    100% {
        background: #ff9b85;
    }
}
</style>
<div class="container card shadow p-3 mb-5 bg-body rounded" align="center">
    <div style="position:absolute;top:150px;left:30rem;">
        <strong><?php echo $numeroFinal[
          "id"
        ]; ?> Produtos no catálogo do site</strong>
    </div>
    <div class="container">
        <img src="img/title.png" style="width:580px;height:400px;" class="position-relative top-50 translate-bottom">
    </div>
</div>