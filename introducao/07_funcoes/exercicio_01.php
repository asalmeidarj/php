<?php

/*
    Autor: Alessandro Almeida
    Data: 20/06/2021
*/

/*
    Exercício: Crie uma lista de contas bancárias (arrays) contendo o nome de usuário e 
    o saldo e funções para adicionar um crédito e exibir a conta da seguinte maneira:

    1 A criação de cada conta deve ser feita através de uma função passando apenas
    o parâmetro $nome. Exemplo: criarConta("Joaquim");

    2. Adicione um saldo a conta atráves de uma função passando apenas o nome e
    o valor. Exemplo: addSaldo(Joaquim, 13000);
        Obs.: Dentro da Lista de contas bancárias, caso exista uma conta de nome 'Joaquim',
        será adicionado o valor 13000.

    3. Crie uma função que passando o parâmetro $nome exiba todas contas e saldo de nome $nome.
        Exemplo: 
            exibirConta('Joaquim') ----> Saída: Joaquim tem um saldo de 1300.
    
*/

//////////////                SOLUÇÃO            ///////////////////////////

//////////////////////////////////////////////////////////////
/// Simulando criação de conta bancária e adição de saldo /////
/// com vetores e funções.      (ARRAY ASSOCIATIVO)        ////
///////////////////////////////////////////////////////////////




// Função cria uma conta dado um nome
// Obs.: será criado um array associativo com chaves "nome" e "saldo"
// dentro da array $contas.

function addConta($nome) {
    //definir uma variável global para inserir os dados
    global $contas;
    //Criar a conta de pessoa de nome $nome com saldo zerado.
    $contas[] = [
        "nome" => $nome,
        "saldo" => 0
    ];
}


// Verifica se existe alguma conta de valor igual ao argumento $nome passado,
// caso exista, será exibido na tela o nome e o saldo.

function verConta($nome){
    global $contas;
    foreach ($contas as $pessoa) {
        if ($pessoa["nome"] == $nome){
            echo $pessoa["nome"] . ' Saldo: ' . $pessoa["saldo"] . PHP_EOL;
        }
    }
}


// Adiciona um saldo igual ao argumento $saldo a conta de mesmo nome que o argumento $nome
// Obs.: Da forma que elaboramos a simulação, será adicionado o saldo em qualquer conta
// de mesmo nome. Poderiamos eliminar esse problema trabalhando com um campo id.

function addSaldo($nome, $saldo) {
    global $contas;
    $i=0;
    foreach ($contas as $pessoa) {
        if ($pessoa["nome"] == $nome){
            $contas[$i]["saldo"] += $saldo;
        }
        $i++;
    }
}




//////////////  CRIANDO, ADICIONANDO E EXIBINDO ///////////////

addConta('Alessandro');
addConta('Alessandro');  // Segunda conta com nome 'Alessandro'.
addConta('Gisele');
addConta('Giovana');
addConta('Clara');
addConta('Atena');
addSaldo('Alessandro', 1500);
verConta('Alessandro');


// Note que será criada duas contas com nome Alessandro
// uma vez que a array $contas é um array numérico
// com suas posições preenchidas com um array associativo
// !!!!! A chave "nome" não pertence a array $contas !!!!!!!





/*

 O script acima é utilizado apenas para fins de estudo.
 O objetivo deste script é manipular arrrays, trabalhar o escopo
 de variável e alterar ou criar uma variável dentro do escopo de uma função.

*/
