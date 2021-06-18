<?php

// EXIBINDO O VALOR DE UMA VARIÁVEL NO TEXTO

$nome = "Alessandro";
$idade = 32;

/*
  Com as aspas simples o resultado exibido será
  exatamente o mesmo dentro das aspas
*/
echo 'Me chamo $nome e tenho $idade anos';

/* 
  Se utilizássemos aspas duplas seria exibido o valor atribuído à variável
*/
echo "Me chamo $nome e tenho $idade anos"; 

// CONCATENANDO TEXTO
echo 'Meu nome é ' . $nome . ' e tenho ' . $idade ' anos.';


 
