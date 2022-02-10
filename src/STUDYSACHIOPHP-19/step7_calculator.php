<?php

// STEP7: STEP6を変更し、Switch文を利用して、特定の文字（'=', '.', 'c') の場合はその文字を出力してみる

echo 'STEP7 Please enter: ';
$array_std7 = trim(fgets(STDIN));
switch($array_std7){
    case '=':
        echo '=';
        break;
    case '.':
        echo '.';
        break;
    case 'c':
        echo 'c';
        break;
    default:
    return;
}