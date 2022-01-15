<?php

//配列
$hoge = array(
    'apple',
    'melon',
    'orange',
);
echo $hoge[0],PHP_EOL;

//連想配列(キーでアクセス)
$color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'melon' => 'green',
);
echo $color['banana'],PHP_EOL;

//多次元配列
$test = array(
    'apple' => array(
        'price' => 100,
        'count' => 1,
    ),
    'orange' => array(
        'price' => 200,
        'count' => 2
    ),
    'banana' => array(
        'price' => 111,
        'count' => 3,
    ),
);
var_dump($test);





















?>