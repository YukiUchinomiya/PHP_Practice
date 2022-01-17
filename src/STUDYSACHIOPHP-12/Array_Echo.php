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

//二次元配列
//二次元配列の連想配列の特定の要素を出力
//echo [外側の配列(要素は配列であればインデックス、連想配列であれば指定してるキーの値)]
//echo [ネストされた配列(要素は配列であればインデックス、連想配列であれば指定してるキーの値)]
$test = [
    'apple' => [
        'price' => 100,
        'count' => 1,
    ],
    'orange' => [
        'price' => 200,
        'count' => 2
    ],
    'banana' => [
        'price' => 111,
        'count' => 3,
    ]
];
echo $test['apple']['price'] . PHP_EOL;
echo $test['orange']['count'] . PHP_EOL;

?>