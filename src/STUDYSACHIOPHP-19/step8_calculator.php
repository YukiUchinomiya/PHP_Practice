<?php

// STEP8: STEP7に加え、演算子を受け取った場合の分岐を追加してみる
//想定している結果が出力されている(想定したcase毎で出力される)
while(true){
    echo 'STEP8 Please enter: ';
    $array_std8 = trim(fgets(STDIN));
    switch($array_std8){
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
            echo '+' . PHP_EOL;
            break;
        case '-':
            echo '-' . PHP_EOL;
            break;
        case '*':
            echo '*' . PHP_EOL;
            break;
        case '/':
            echo '/' . PHP_EOL;
            break;
        default:
        return;
    }
}