<?php
session_start();


include("conexao.php");
$SQL = "SELECT * FROM usarios";
$resultados = mysqli_query($conexao, $SQL);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel adm</title>
</head>
<body>
<?php
    echo "seja bem vindo(a)" . $_SESSION['nome'];
    ?>
    <a href="sair.php">sair</a>
    <h1>crud de usuario</h1>
    <form action="valida.php" method="post">
        <form action="inserir.php" method="post">
        <input type="text" placeholder="DIGITE O NOME" name= "nome">
        <input type="text name="login placeholder="DIGITE SEU LOGIN">
        <input type="password" name="senha" placeholder="DIGITE SUA SENHA">
        <select name="nivel">
            <option value="adm">administrador</option>
            <option value="colaborador">colaborador</option>
        </seletct>
        <input type="submit" value= "cadastrar">
</form>
<h1>listar usuarios</h1>
 <table>
    <thead>
        <tr>
            <th>id</th>
            
            <th>nome</th>
            <th>login</th>
            <th>senha</th>
            <th>nivel de acesso</th>
            <th>ação</th>
        </tr>
    </thead>
 </table>
 <tbody>
 <?php
    while($linha = mysqli_fetch_assoc($resultados)){
        ?>
    <tr>
      <td><?php echo $linha['id']?></td>
      <td><?php echo $linha['nome']?></td>
      <td><?php echo $linha['login']?></td>
      <td><?php echo $linha['senha']?></td>
      <td><?php echo $linha['nivel_acesso']?></td>
      <td>
        <button>atualizar</button>
        <a href="deletar.php?id=<?php echo $linha['id']?>">
        <button>deletar</button>
      </td>
     
    </tr>
    <?php } ?> 
    </tr>
 </tbody>
 </table>
</body>
</html>