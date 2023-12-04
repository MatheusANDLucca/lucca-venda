<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucca - Fitness - Login</title>
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
</head>
<body>
    <div class="container login-container">
        <h1 class="text-center mb-4">Login do Restaurante</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-success btn-block" onclick="realizarLogin()">Entrar</button>

            <!-- Link para criar usuário -->
            <p class="mt-3 text-center">Ainda não tem um usuário? <a href="novo-usuario.php">Crie agora</a>.</p>
        </form>
    </div>

   
</body>

</html>