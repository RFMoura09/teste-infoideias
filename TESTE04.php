<?php

/*
    -------------------------------------------------------------------
    LEIA ESTE COMENTÁRIO!
    -------------------------------------------------------------------

    A DESCRIÇÃO DA QUESTÃO FICOU MUITO VAGA, DEVIDO AOS TESTES DADOS!

    O ALGORITMO IMPLEMENTADO FOI:
        - SE REMOVER UM ELEMENTO DA ARRAY, E AINDA ASSIM CONSEGUIR SER REALIZADO UMA SEQUÊNCIA CRESCENTE
          (DE UM EM UM. EX: 1,2,3... ) COM OS OUTROS ELEMENTOS DA MESMA (OU SEJA, NÃO PODE HAVER ELEMENTO REPETIDO TAMBÉM!) ENTÃO, SERÁ RETORNADO TRUE. CASO CONTRÁRIO, FALSE

*/

$num_post = $_POST['num'];

function SequenciaCrescente($array)
{

    if (count($array) === 1) {
        return true;
    }

    $numeros = $array;
    sort($numeros);

    $res = false;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($i === 0) {
            continue;
        }

        if ($numeros[$i] - $numeros[$i - 1] !== 1) {
            break;
        } else {
            $res = true;
        }
    }

    return $res;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 04</title>
</head>

<body>
    <form action="" method="POST">
        Digite uma lista de números qualquer, que eu descobrirei e é possível obter uma sequencia crescente removendo apenas um elemento da lista: <br />
        <p style="color:red">OBS: OS NÚMEROS NÃO PODEM TER CASA DECIMAL E DEVEM ESTAR SEPARADOS POR VÍRGULA!</p>
        <input type="text" name="num" id="num">
        <button type="submit">Enviar</button>
    </form>
    <?php if (isset($num_post)) : ?>
        <h3><?= SequenciaCrescente(explode(',', $num_post)) ? "" : "NÃO" ?> é possível! </h3>
    <?php endif; ?>
</body>

</html>