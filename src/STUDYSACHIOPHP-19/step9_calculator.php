<?php


// STEP9: STEP8に加え、受け取った演算子で逆ポーランド計算を行ってみる
//逆ポーランド記法とは先頭から順に値を読んで、算術演算子が現れるまで数字を１つずつ配列に格納すること
//数字を繰り返し配列に格納していき、入力値が演算子のケースの場合、それまでに格納されていた配列の値を
//入力された演算子で計算するような仕様の認識

while(true){
    echo 'STEP9 Please enter: ';
    $array_std9 = trim(fgets(STDIN));

//配列に入力された数値を格納
    if(is_numeric($array_std9)){
        $array_result[] = $array_std9;
        var_dump($array_result);
    }

//演算子が入力された場合、数値が格納された配列の数値で計算する
    switch($array_std9){
        case '=':
            echo '=' . PHP_EOL;
            break;
        case '.':
            echo '.' . PHP_EOL;
            break;
        case 'c':
            echo 'c' . PHP_EOL;
            break;
        case '+':
        //ここで格納された配列の数値に対して計算を行う
            $a = array_slice($array_result,0);
            $b = array_slice($array_result,1);
            $c = $a + $b;
            var_dump($c);
            break;
        case '-':
        //ここで格納された配列の数値に対して計算を行う
            break;
        case '*':
        //ここで格納された配列の数値に対して計算を行う
            break;
        case '/':
        //ここで格納された配列の数値に対して計算を行う
            break;
    }
}

