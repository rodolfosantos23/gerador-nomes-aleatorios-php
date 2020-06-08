<?php

include __DIR__ . "/../vendor/autoload.php";

use App\Models\NomeAleatorio;

$nomes = new NomeAleatorio();
?>

<html>
    <head>
        <title>Gerador de nomes</title>
    </head>

    <body>
        <ul>
            <li><strong>Nome aleatório:</strong> <?=$nomes->geraNome()?></li>
            <li><strong>Nome feminino:</strong> <?=$nomes->geraNome('F')?></li>
            <li><strong>Nome masculino:</strong> <?=$nomes->geraNome('M')?></li>
            <li><strong>Nome aleatório 2 sobrenomes:</strong> <?=$nomes->geraNome(null, 2)?></li>
        </ul>
    </body>
</html>
