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
        $cupom = trim($_GET['cupom']);
        $cupons_validos = array('NIVER10', 'PROMO15');
        $cupomAceito = in_array($cupom, $cupons_validos);
    
    ?>

    <h1><a href="index.php">
        <img src="">
        Shopping virtual</h1>
    <ul>
        <li><a href="p1.php" <?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>>Produto</a></li>
        <li><a href="p2.php" <?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>>Produto</a></li>

    </ul>
    <form action="index.php" method="GET">
        Cupom de desconto:
        <?php
            if($cupomAceito){
        ?>
        <strong> <?php echo $cupom ?> </strong>
        <img src="https://media.istockphoto.com/vectors/check-mark-valid-seal-icon-white-squared-tick-in-green-circle-flat-ok-vector-id1180914467?k=6&m=1180914467&s=170667a&w=0&h=XA5npbaOnbn2umCdhbMVpGUnSXedSaadZs0uZN6lHtQ=" width=100>
        <?php } else{ ?>
            <input type="text" name="cupom"> <input type="submit" value="Enviar">
        <?php }?>
        <?php
        ?>
    </form>
</body>

</html>