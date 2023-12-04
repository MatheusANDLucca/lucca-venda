<?php
include('config.php');


        // code...
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        
     $sql = "INSERT INTO usuarios (nome,email,usuario,senha,data_nasc) VALUES ( '{$nome}','{$email}','{$usuario}','{$senha}','{$data_nasc}')";
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro com sucesso!');</script>";
            print "<script>location.href='index.php';</script>";
        }
 