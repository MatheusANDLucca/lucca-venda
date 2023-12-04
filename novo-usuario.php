<?php
include('config.php');
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>
    <div class='container'>
<h1>Novo Usuario</h1>
<form action="salvar-usuario.php" method="POST">
    
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Usuario::</label>
        <input type="text" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn2">Enviar</button>
    </div>
</form>
</div>