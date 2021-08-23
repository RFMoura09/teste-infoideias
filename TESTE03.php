<?php

function GerarSequenciaDescobrirModa()
{
    $a = [];
    for ($i = 0; $i < 20; $i++) {
        $a[] = random_int(0, 10);
    }

    $ocorrencias = array_count_values($a);
    $maxnumero = array_keys($ocorrencias, max($ocorrencias))[0];
    $maxvezes = $ocorrencias[$maxnumero];

    $repetidos = [
        'numero' => $maxnumero,
        'repete' => $maxvezes
    ];

    return [$repetidos, $a];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 03</title>
</head>

<body>
    <form action="" method="POST">
        <p>Clique no Botão abaixo para gerar uma lista com 20 números aleatórios de 0-10, e eu direi qual número se repete mais, e quantas vezes ele se repetiu</p>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) :
        $res = GerarSequenciaDescobrirModa();
    ?>
        <p>lista: [<?= implode(",", $res[1]) ?>]</p>
        <p> O número que mais se repete é o <?= $res[0]['numero'] ?>. </p>
        <p> Ele se repete <?= $res[0]['repete'] ?> vezes. </p>
    <?php endif; ?>
</body>

</html>