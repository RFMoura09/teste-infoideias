<?php
$ano_post = $_POST['ano'];

function SeculoAno($ano)
{
    return  intdiv($ano, 100) + (($ano % 100) > 0 ? 1 : 0);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 01</title>
</head>

<body>
    <form action="" method="POST">
        Digite um ano qualquer, que eu descobrirei de qual século ele é!: <br />
        <input type="text" name="ano" id="ano">
        <button type="submit">Enviar</button>
    </form>
    <?php if (isset($ano_post)) : ?>
        <h3>O século é: <?= SeculoAno($ano_post) ?></h3>
    <?php endif; ?>
</body>

</html>