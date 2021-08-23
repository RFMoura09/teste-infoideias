<?php
$num_post = $_POST['num'];

function PrimoInferior($num)
{
    if ($num < 0) {
        return 0;
    }

    switch ($num) {
        case 10:
            return 7;
        case 9:
            return 7;
        case 8;
            return 7;
        case 7;
            return 7;
        case 6;
            return 5;
        case 5;
            return 5;
        case 4;
            return 3;
        case 3;
            return 3;
        case 2;
            return 2;
    }

    for ($i = $num; $i > 0; $i--) {
        if (($i % 2 !== 0) && ($i % 3 !== 0) && ($i % 5 !== 0) && ($i % 7 !== 0)) {
            return $i;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 02</title>
</head>

<body>
    <form action="" method="POST">
        Digite um número qualquer, que eu descobrirei o maior número primo inferior a ele!: <br />
        <input type="number" name="num" id="ano">
        <button type="submit">Enviar</button>
    </form>
    <?php if (isset($num_post)) : ?>
        <h3>O número é: <?= PrimoInferior((int) $num_post) ?></h3>
    <?php endif; ?>
</body>

</html>