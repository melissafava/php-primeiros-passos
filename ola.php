<?php
//comentario
    $nome = "Melissa";
    $sobrenome1 = " de Lima";
    $sobrenome2 = " e Fava";
    $nomecompleto = "$nome, $sobrenome1 $sobrenome2";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
</head>
<body>
    <h1>Olá Mundo! Tudo bem <?php echo $nome ?>?</h1>
    <h1>Seu sobrenome é <?php echo $sobrenome1 ?>?</h1>
    <h1>E o outro é <?php echo $sobrenome2 ?>?</h1>
    <h2>Seu nome inteiro é <?php echo $nomecompleto?>??</h2>
</body>
</html>