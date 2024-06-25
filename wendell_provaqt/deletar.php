<?php
$id = $_GET['id'];
include('conexao.php');
$SQL = "DELETE FROM usarios WHERE id = '$id'";
mysqli_query($conexao, $SQL);
$registro = mysqli_affected_rows($conexao);
if($registro){
    header('location:dashadmi.php');
}else{
    echo "não foi deletado";
}
?>