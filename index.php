<?php

$array = [
    [
        'name' => 'Eduarda',
        'note' => 10,
    ],
    [
        'name' => 'Ana',
        'note' => 3,
    ],
    [
        'name' => 'Angelina',
        'note' => 8,
    ],
    [
        'name' => 'Guilherme',
        'note' => 4,
    ],

    [
        'name' => 'Ricardo',
        'note' => 6,

    ],
    [
        'name' => 'Fabio',
        'note' => 7,
    ],

];

/* usort, utilizado para definir a ordem em que os elementos de um array aparecem, utilizando o retorno -1 (O elemento precisa vir primeiro), 1 (O elemento vem depois) e 0 (Indiferente) de uma function. */

function sorting(array $array1, array $array2)
{
    // Operador de espaçonave, que irá verificar se o valor da esquerda é menor que o da direita e retorna -1, se for maior, 1 e se forem iguais, 0

    return $array2['note'] <=> $array1['note'];

    /*
   Realizando a comparação com um operador ternáro.
     if ($array1['note'] === $array2['note']) {
        return 0;
    };
    return $array1['note'] > $array2['note'] ? -1 : 1; */
};

usort($array, 'sorting');

var_dump($array);

//   Se eu quero realizar o sort só que manter as chaves, eu utilizo asort. Se eu quero utilizar o rsort, mas mantendo as chaves eu utilizo arsort. Se eu quero ordenar pelas chaves, eu utilizo o ksort(crescente) ou krsort(decrescente) ou uksort (utilizando a função comparadora).
