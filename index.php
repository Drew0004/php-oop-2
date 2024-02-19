<?php

    require_once __DIR__.'/classes/product.php';
    require_once __DIR__.'/classes/food.php';
    require_once __DIR__.'/classes/dogbed.php';
    require_once __DIR__.'/classes/toys.php';

    echo 'PRODOTTO SINGOLO';

    $productOne = new product('Nome', 'Foto', 2, 'Cane', 22, 'Descrizione: lorem ipsum', 5);
    var_dump($productOne);

    echo '<hr>';

    echo 'PRODOTTO CIBO';
    $foodProductOne = new food('Nome', 'Foto', 2, 'Cane', 22, 'Descrizione: lorem ipsum', 5, '05/11/1999', 'lamponi', 36);
    var_dump($foodProductOne);
    
    echo '<hr>';

    echo 'PRODOTTO CUCCIA';
    $dogbedProcutOne = new dogbed('Nome', 'Foto', 2, 'Cane', 22, 'Descrizione: lorem ipsum', 5, 'Micro pile', '30,5 X 21,7 cm');
    var_dump($dogbedProcutOne);

    echo '<hr>';

    echo 'PRODOTTO GIOCATTOLO';
    $toyProcutOne = new toy('Nome', 'Foto', 2, 'Cane', 22, 'Descrizione: lorem ipsum', 5, 'Plastica', 'false');
    var_dump($toyProcutOne);
?>