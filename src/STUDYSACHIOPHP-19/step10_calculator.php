<?php

// STEP10: =という文字を受け取った場合に、計算結果を出力してみる

while(true){
    echo 'STEP10 Please enter: ';
    $array_std10 = trim(fgets(STDIN));

//配列に入力された数値を格納
    if(is_numeric($array_std10)){
        //スタックを準備
        $array_result[] = $array_std10;
        var_dump($array_result);
    }

//演算子が入力された場合、数値が格納された配列の数値で計算する
    switch($array_std10){
        case '=':
            echo $result . PHP_EOL;
            break;
        case '.':
            echo '.' . PHP_EOL;
            break;
        case 'c':
            echo 'c' . PHP_EOL;
            break;
        case '+':
        //配列の最初、最後の要素を取り出して足す
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array + $first_array;
            break;
        case '-':
        //配列の最初、最後の要素を取り出して引く
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array - $first_array;
            break;
        case '*':
        //配列の最初、最後の要素を取り出してかける
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array * $first_array;
            break;
        case '/':
        //配列の最初、最後の要素を取り出して割る
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array / $first_array;
            break;
    }
}

