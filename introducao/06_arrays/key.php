<?php

// Fonte: https://www.php.net/manual/pt_BR/function.key.php

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// este ciclo exibirá toda a chave do array associativo
// onde o valor é igual a "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}


/*
current() - Retorna o elemento corrente em um array
next() - Avança o ponteiro interno de um array
*/
