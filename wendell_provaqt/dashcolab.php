<?php
session_start();
include("seguranc.php");
include("conexao.php");
$SQL = "SELECT * FROM usarios";
$resultado = mysqli_query($conexao, $SQL);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel do colaborador</title>
</header>
<body>
    <?php
    echo "seja bem vindo(a)" . $_SESSION['nome'];
    ?>
<a href="sair.php">sair</a>
    <h1>lista usuario</h1>
 <table>
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>login</th>
        </tr>
    </thead>
 </table>
 <tbody>
    <?php
    while($linha = mysqli_fetch_assoc($resultado)){
        ?>
    <tr>
      <td><?php echo $linha['id']?></td>
      <td><?php echo $linha['nome']?></td>
      <td><?php echo $linha['login']?></td>
    </tr>
    <?php } ?>
 </tbody>

</body>
</html>