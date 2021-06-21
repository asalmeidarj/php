<?php

/*
    EXPRESSÕES REGULARES

    Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.


    ^ início da expressão; 
    $ final da expressão;
    /i case sensitive;
    [] conjunto de caracteres;
    {} ocorrências -    ?{0, 1} *{0,} +{1,};

*/


// Exemplo
$entrada = 'email@teste.com.br.br?';
$padrao = "/^[a-z]+@[a-z]+.[a-z]+[a-z.]*$/";
$teste = preg_match($padrao, $entrada);

echo $teste; // Resultado 0, pois a entrada contém ? e não está no padrão estabelecido.
