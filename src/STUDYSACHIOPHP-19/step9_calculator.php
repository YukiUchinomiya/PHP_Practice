<?php


//TODO::作業途中
// STEP9: STEP8に加え、受け取った演算子で逆ポーランド計算を行ってみる
//逆ポーランド記法とは先頭から順に値を読んで、算術演算子が現れるまで数字を１つずつ配列に格納すること
//数字を繰り返し配列に格納していき、入力値が演算子のケースの場合、それまでに格納されていた配列の値を
//入力された演算子で計算するような仕様の認識

echo 'STEP9 Please enter: ';
$stack = [];
$stack = $array_std8;
$array_std8 = trim(fgets(STDIN));
switch($array_std8){
    case '=':
        echo '=';
        break;
    case '.':
        echo '.';
        break;
    case 'c':
        echo 'c';
        break;
    case '+':
        $stack;
    case '-':
        $stack;
    case '*':
        $stack;
    case '/':
        $stack;
    case '%':
        $stack;
    case '**':
        $stack;
    default:
    return;

}

