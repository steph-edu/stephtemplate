<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
<?php
    $usuarios = array();
    $usuarios['maria']['nome'] = 'Maria da Silva';
    $usuarios['maria']['id'] = 5974;
    $usuarios['joao']['nome'] = 'João Alfredo';
    $usuarios['joao']['id'] = 3618;
    $userLogin = $_POST['login'];
    $userID = $usuarios[$userLogin]['id'];

?>

<h1>Olá! <?php echo $usuarios[$userLogin]['nome'];?>! </h1>
<form action="apagar.php" method="POST">
    <ul>
        <li> E-mail 1 </li>
        <li> E-mail 2 </li>
    </ul>
    <input type="hiden" name="id" value="<?php echo $userID; ?>">
</form>
<a href="https://www.google.com/search?q=php">Busca </a>
</body>
</html>