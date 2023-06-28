<?php
session_start();

$erro = $_SESSION['erro'];

?>

<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <?php
            if($erro){
            
            ?>
            <strong> Login ou senha incorreta </strong>
            <br>
            <?php
            }
            
            ?>
                Login: <input type="text" name="login" >
                <br>
                Senha: <input type="password" name="senha">
                <br>
                <input type="submit" value="Enviar">
        </form>
    </body>
</html>