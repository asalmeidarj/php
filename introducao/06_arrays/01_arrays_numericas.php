<?php

////////////  ARRAY NUMÉRICA

// Atribuindo um valor a um array (vetor);
$vetor = ['PHP' , 'Programação', 'Web', 2021];

/*
    Os dados na array $vetor são:
        $vetor[0] --> 'PHP' (tipo string)
        $vetor[1] --> 'Programação' (tipo string)
        $vetor[2] --> 'Web' (tipo string)
        $vetor[3] --> 2021 (tipo integer)

    Os valores são associados à um índice do vetor iniciando por 0, de acordo com a ordem de entrada
    da esquerda para direita.
*/

// Adicionando um novo valor a um vetor
$vetor[] = "NovoDado"  // O valor será guardado na posição 4 do vetor.

// Varrendo os valores de um vetor com FOR
$tamanhoVetor = count($vetor);               // count() para saber o tamanho do vetor
for ($i=0; $i < $tamanhoVetor; $i++) {
    echo $vetor[$i] . PHP_EOL;
};

// Varrendo os valores de um vetor com FORECH
foreach ($vetor as $dado) {
    echo $dado . PHP_EOL;
};

// Excluindo uma posição de um vetor
unset($vetor[2]); // excluíra a posição 2 do vetor, ou seja, 'Web';
