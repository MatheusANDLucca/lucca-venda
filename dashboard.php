<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucca - Fitness</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lucca - Fitness</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=sair">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch(@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "pedido":
                        include("pedidos.php");
                        break;
                    case "sair":
                        include("logout.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    default:
                    include("pedidos.php");
                    break;
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>