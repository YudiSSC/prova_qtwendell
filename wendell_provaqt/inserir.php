<?php
include("conexao.php");
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nivel_acesso = $_POST['nivel'];

$SQL = "INSERT INTO usuarios(nome, login, senha, nivel_acesso) VALUES('$nome', '$login', '$senha'. '$nivel_acesso')";

msqli_query($conexao, $SQL);

$registro = mysqli_affected_rows($conexao);

if($registro){
    header("location: dashadm.php");
}else{
    echo "erro";
}
?>