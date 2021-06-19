<?php

// ARRAY ASSOCIATIVO

// Atribuindo valores à uma array associativo (chaves não são necessariamente inteiros);
$fruits = [
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple')
];

// Varrendo todas as key de um array associativo com FOREACH
foreach ($fruits as $key => $fruits) {
    echo $key . PHP_EOL;
};

/*   Note que se tirarmos a parte '=> $fruits' do código, o código funcionaria
    normalmente, porém exibindo os valores do array $fruits ('apple', 'orange', etc).
    
         foreach ($fruits as $key) {
            echo $key . PHP_EOL;
         };
*/

