<?php
session_start();    
?>
<!DOCTYPE html>
<html>
<head>
    <title>1 SESSÃO</title>
</header>
<body>
    <form action="valida.php" method="post">
        <input type="text" name="login" placeholder="DIGITE SEU LOGIN">
        <input type="password" name="senha" placeholder="DIGITE SUA SENHA">
        <input type="submit" value="logar">
</form>
<?php
if(isset($_SESSION['loginError'])){
    echo $_SESSION['loginError'];
    unset($_SESSION['loginError']);
} 
?>
</body>
</html>