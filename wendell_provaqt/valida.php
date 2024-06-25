<?php
session_start();

require_once("conexao.php");

if (!empty($_POST['login']) && !empty($_POST['senha'])) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usarios WHERE login = '$login' AND senha = '$senha'";

    $execucao = mysqli_query($conexao, $query);

    $resultado = mysqli_fetch_assoc( $execucao);

    if (!empty($resultado)) {
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['nivel'] = $resultado['nivel_acesso'];

        if ($_SESSION['nivel'] == 'admin'){
            header("location:dashadm.php");

        }else{
            header("location:dashcolab.php");
        }

    }else{
        $_SESSION['loginError'] = "Usuário e senha incorretos";
        header("Location:index.php");
    }
}else{
    $_SESSION['loginError'] = "Usuário e senha incorretos";
    header("Location: index.php");
}
?>
