<?php
$localdoBancoURL = "localhost";
$usuariodoSGBD = "root";
$senhadoSGBD = "";
$bancoDeDados = "wendell";
$porta = "3366";
$conexao = mysqli_connect($localdoBancoURL, $usuariodoSGBD, $senhadoSGBD, $bancoDeDados, $porta);
if ($conexao){
    echo "conexão ok";
} else {
echo "conexão não encontrada ";
}
?>