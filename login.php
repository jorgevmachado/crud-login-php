<?php
  require_once ("banco-usuario.php");
  require_once ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"],$_POST["senha"]);

if($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválida!";
    header("location: index.php");
}else{
    $_SESSION["success"] = "Usuário logado com sucesso!";
    logaUsuario($usuario["email"]);
    header("location: index.php");
}
die();