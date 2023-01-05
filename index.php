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

$array2 = [
    'Kellie' => 6,
    'Jhon' => null,
    'Finn' => 4,
    'Robert' => 9,
    'Dionisio' => 2,
    'Zeus' => 10,
    'Atena' => 10
];

// Verificar se determinada chave existe no array:
var_dump(array_key_exists('Jhon', $array2));

// Verifica se determinada chave existe no array e é diferente de nulo:
var_dump(isset($array2['Jhon']));

// Verifica se determinado valor existe no array:
var_dump(in_array(10, $array2));

// Procura determinado valor no array e retorna sua chave, porém, ele para de iterar no primeiro que encontar, ignorando os demais.:
echo array_search(10, $array2);